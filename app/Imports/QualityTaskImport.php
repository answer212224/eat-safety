<?php

namespace App\Imports;

use App\Models\QualityTask;
use TypeError;
use Carbon\Carbon;
use App\Models\Task;
use App\Models\Restaurant;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class QualityTaskImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        // 類別	同仁	分店	稽核日期
        // 食安巡檢	張芳瑜,劉亭均	CTK001	2024/3/1
        // 清潔檢查	劉亭均	CTK002	2024/3/2
        // 食安巡檢	蔡宜珊	CTK003	2024/3/3
        // 清潔檢查	陳文涵	CTF001	2024/3/4
        // 食安巡檢	劉亭均	CTC001	2024/3/5
        // 食安巡檢	劉亭均	CTW001	2024/3/6
        // 食材/成品採樣	程世瑩	CTW002	2024/3/7

        // 移除標題
        $collection = $collection->forget(0);

        // 移除空白行
        $collection = $collection->reject(function ($item) {
            return $item[0] == null;
        });

        $collection->transform(function ($item) {

            // 假設不是食安及5S或清潔檢查，回傳exception
            if (!in_array($item[0], ['食安巡檢', '清潔檢查', '食材/成品採樣', '原料驗收查核', '製程巡檢'])) {
                throw new \Exception('請確認類別是否正確：' . $item[0]);
            }

            try {
                $restaurant = Restaurant::where('sid', $item[2])->firstOrFail();
            } catch (ModelNotFoundException $e) {
                throw new \Exception('請確認分店代碼是否正確：' . $item[2]);
            }

            $userName = explode(',', $item[1]);
            $userIds = [];
            foreach ($userName as $name) {
                try {
                    $userIds[] = \App\Models\User::where('name', $name)->firstOrFail()->id;
                } catch (ModelNotFoundException $e) {
                    throw new \Exception('請確認同仁姓名是否正確：' . $name);
                }
            }

            try {
                $taskDate = Carbon::create($item[3]);
            } catch (TypeError $e) {
                throw new \Exception('請確認稽核日期是否正確：' . $item[3]);
            }

            return [
                'restaurant_id' => $restaurant->id,
                'user_id' => $userIds,
                'category' => $item[0],
                'task_date' => $taskDate,
            ];
        });

        // 新增任務
        foreach ($collection as $item) {

            $task = QualityTask::create([
                'restaurant_id' => $item['restaurant_id'],
                'category' => $item['category'],
                'task_date' => $item['task_date'],
            ]);

            $task->users()->sync($item['user_id']);
            // 此任務月份的餐點採樣資料
            $brandMeals = \App\Models\QualityMeal::whereYear('effective_date', $task->task_date)->whereMonth('effective_date', $task->task_date)->where('sid', $task->restaurant->brand_code)->get();
            $shopMeals = \App\Models\QualityMeal::whereYear('effective_date', $task->task_date)->whereMonth('effective_date', $task->task_date)->where('sid', $task->restaurant->sid)->get();
            $meals = $brandMeals->merge($shopMeals);

            // 將餐點採樣資料和任務關聯
            $task->meals()->sync($meals);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Meal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'EAT',
            'brand' => '饗食',
            'shop' => '',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '內廚房',
            'qno' => '1',
            'name' => '和風花枝',
            'note' => '',
            'item' => 'E',
            'items' => '大腸桿菌、金黃',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'EAT',
            'brand' => '饗食',
            'shop' => '',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '生魚片壽司區',
            'qno' => '2',
            'name' => '鮮切鮭魚',
            'note' => '',
            'item' => 'Z',
            'items' => '大腸桿菌、金黃、沙門',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'EAT',
            'brand' => '饗食',
            'shop' => '',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '生魚片壽司區',
            'qno' => '3',
            'name' => '卷壽司',
            'note' => '鯖魚壽司、燻鮭魚加州卷、辣鮪魚加州卷(各2個)',
            'item' => 'E',
            'items' => '大腸桿菌、金黃',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'EAT002',
            'brand' => '饗食',
            'shop' => '新光',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '內廚房',
            'qno' => '7',
            'name' => '紐西蘭淡菜',
            'note' => '4月不合格',
            'item' => 'E',
            'items' => '金黃',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'EAT005',
            'brand' => '饗食',
            'shop' => '京站',
            'category' => '冰塊',
            'chef' => '中廚',
            'workspace' => '內廚房',
            'qno' => 'Z1',
            'name' => '塊冰',
            'note' => '(左邊)製冰機',
            'item' => 'Y',
            'items' => '腸桿菌科',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'GUO',
            'brand' => '果然匯',
            'shop' => '',
            'category' => '食材',
            'chef' => '西點',
            'workspace' => '水果飲品區',
            'qno' => '4',
            'name' => '海鹽檸檬飲',
            'note' => '果汁鼎',
            'item' => 'DD',
            'items' => '大腸桿菌',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'GUO001',
            'brand' => '果然匯',
            'shop' => '明曜',
            'category' => '冰塊',
            'chef' => '西廚',
            'workspace' => '內廚房',
            'qno' => 'Z1',
            'name' => '塊冰',
            'note' => '',
            'item' => 'Y',
            'items' => '腸桿菌科',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'GUO006',
            'brand' => '果然匯',
            'shop' => '天母',
            'category' => '食材',
            'chef' => '西點',
            'workspace' => '水果飲品區',
            'qno' => '6',
            'name' => '復刻紅茶',
            'note' => '果汁鼎/1-4月不合格',
            'item' => 'AA',
            'items' => '腸桿菌科',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'IPD',
            'brand' => '饗饗',
            'shop' => '',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '秀廚',
            'qno' => '4',
            'name' => '和風櫻鯛佐風乾番茄',
            'note' => '',
            'item' => 'E',
            'items' => '大腸桿菌、金黃',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'IPD',
            'brand' => '饗饗',
            'shop' => '',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '秀廚',
            'qno' => '4',
            'name' => '和風櫻鯛佐風乾番茄',
            'note' => '',
            'item' => 'E',
            'items' => '大腸桿菌、金黃',
        ]);

        Meal::create([
            'effective_date' => '2021-05',
            'sid' => 'IPD002',
            'brand' => '饗饗',
            'shop' => '新莊',
            'category' => '食材',
            'chef' => '日廚',
            'workspace' => '生魚片壽司區',
            'qno' => '7',
            'name' => '嫩蘆筍蝦手捲',
            'note' => '3、4月不合格',
            'item' => 'E',
            'items' => '金黃',
        ]);
    }
}

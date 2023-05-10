<?php

namespace Database\Seeders;

use App\Models\Defect;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Defect::create(['group' => '重大缺失', 'title' => '食材過期', 'category' => '重大缺失', 'description' => '任一食材(含供應商產品、央廚產品、謄寫之有效日期標示食材分裝品標示、同仁飯菜食材、同仁私人食物、研發用食材等)超過產品有效日期 (過期)，且無明顯區隔或無有效識別待廢棄之情形，或是預計使用、已使用；任一供應商品開封後未依原包裝標示期限內使用完畢']);

        Defect::create(['group' => '重大缺失', 'title' => '重大交叉污染', 'category' => '重大缺失', 'description' => '食材被非食品用的化學品污染，例如：鹼片、除油劑、玻璃清潔劑等。(酒精、洗碗精、洗手乳除外)']);

        Defect::create(['group' => '重大缺失', 'title' => '禁用品/禁止行為', 'category' => '重大缺失', 'description' => '鹼片液分裝至化學品噴瓶；鹼片液未依集團規範使用(可使用時間：單點：清檢前一天，百匯：清檢前一周)']);

        Defect::create(['group' => '環境衛生', 'title' => '建築-天(包含通風設施)', 'category' => '食安', 'description' => '天花板未覆蓋完整 (破洞或變形列建議事項)']);

        Defect::create(['group' => '環境衛生', 'title' => '手部清洗消毒設施', 'category' => '5S', 'description' => '任一廚區洗手乳、擦手紙、指甲刷、洗手步驟圖無設置或是無法使用']);

        Defect::create(['group' => '餐廚具、設備清潔消毒', 'title' => '一般設備', 'category' => '閉店清潔', 'description' => '餐廳內烤箱、微波爐、層架、廚壁櫃、桌面、推車、展示槽等發現食渣、污垢之總面積≧50元硬幣大小達三處，或積水(冷凝水除外)總面積達≧A4紙張大小範圍']);

        Defect::create(['group' => '破損、剝離、異物', 'title' => '一般設備', 'category' => '閉店清潔', 'description' => '餐廳內烤箱、微波爐、層架、廚壁櫃、桌面、推車、展示槽等發現食渣、污垢之總面積≧50元硬幣大小達三處，或積水(冷凝水除外)總面積達≧A4紙張大小範圍']);

        Defect::create(['group' => '食材保存、解凍', 'title' => '食材密封保存(加封加蓋)', 'category' => '食安', 'description' => '步入式低溫設備任兩項餐點成品、半成品無密封保存或密封不完全 (降溫除外)']);

        Defect::create(['group' => '作業衛生', 'title' => '操作過程', 'category' => '食安', 'description' => '同仁製備過程中，發生一項污染或可能發生污染的操作方式，例如：非即食性食材被汙染後，未有矯正措施']);

        Defect::create(['group' => '食品標籤、標示', 'title' => '操作過程', 'category' => '食安', 'description' => '供應商、央廚產品含分裝品、門市製備品任二項未依集團規範進行標示之情形(標示不一、標示錯誤 、無效期資訊等)']);

        Defect::create(['group' => '文件及紀錄表單', 'title' => '紀錄表單', 'category' => '食安', 'description' => '未依照集團表單規範執行相關作業(更換濾心、油炸油監測等)；集團發布之紀錄表單無確實記錄(錯誤、漏填、超填、造假)；未依照食安規範留存相關文件']);

        Defect::create(['group' => '其他', 'title' => '文具、五金工具', 'category' => '食安', 'description' => '食材或餐廚具(含收納容器)與文件、文具、五金工具、清潔工具接觸共放']);
    }
}

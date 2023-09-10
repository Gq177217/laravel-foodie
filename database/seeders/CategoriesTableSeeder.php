<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $major_category_names = [
            '店舗', 
        ];

        $restaurant_categories = [
            'イタリアン', '和食', '中華料理', 'フレンチ', 'アメリカン', 'カフェ', '居酒屋', 'ステーキハウス',
            'ベジタリアン', 'ベーカリー', '寿司', 'ラーメン', '焼肉', '韓国料理', 'タイ料理', 'インド料理',
            'ベトナム料理', 'メキシコ料理', 'モロッコ料理', 'ギリシャ料理', 'ブラジル料理', 'ペルシャ料理', 'エチオピア料理',
            'シーフード', '素食', 'ビーガン', 'フュージョン', 'バー', 'パブ', 'カクテル', 'デリカテッセン',
            'ファーストフード', 'オーガニック', 'スイーツ', 'アイスクリーム', 'ベーカリーカフェ'
        
        ];

        foreach ($major_category_names as $major_category_name) {
            if ($major_category_name == '店舗') {
            foreach ($restaurant_categories as  $restaurant_categories) {
            Category::create([
            'name' =>   $restaurant_categories,
            'description' =>   $restaurant_categories,
            'major_category_name' => 'デフォルト値' // 適切なデフォルト値を設定
              ]);  
            }
        }
    }
}
}
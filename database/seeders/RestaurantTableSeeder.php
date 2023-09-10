<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use App\Models\Category;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = Category::where('name', 'デフォルトカテゴリ')->first(); // デフォルトのカテゴリを取得
        if ($category) {
            Restaurant::factory()
                ->count(10)
                ->create(['category_id' => $category->id]);
        } else {
            // カテゴリが見つからない場合の処理を追加
        }

        Restaurant::factory()->count(50)->create();
    }
}

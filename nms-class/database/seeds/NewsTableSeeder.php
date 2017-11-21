<?php

use App\News;
use App\Category;
use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::all()->each(function($category) {
            $category->news()->saveMany(factory(News::class, 5)->make());
        });
    }
}

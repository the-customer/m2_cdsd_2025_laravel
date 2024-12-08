<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //id = 1
        Category::create([
            'name'  => 'Technology',
            'slug'  => 'technology',
        ]);
        //id = 2
        Category::create([
            'name'  => 'Sports',
            'slug'  =>'sports',
        ]);
        //id = 3
        Category::create([
            'name'  => 'Business',
            'slug'  => 'business',
        ]);
        //id = 4
        Category::create([
            'name'  => 'Entertainment',
            'slug'  => 'entertainment',
        ]);
        //id = 5
        Category::create([
            'name'  => 'Health',
            'slug'  => 'health',
        ]);
        //id = 6
        Category::create([
            'name'  => 'Science',
            'slug'  =>'science',
        ]);
        //id = 7
        Category::create([
            'name'  => 'World',
            'slug'  => 'world',
        ]);
        //id = 8
        Category::create([
            'name'  => 'Politics',
            'slug'  => 'politics',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Homme';
        $category->description = 'Tous les produits concernant les hommes';
        $category->save();

        $category = new Category();
        $category->name = 'Femme';
        $category->description = 'Tous les produits concernant les femmes';
        $category->save();
    }
}

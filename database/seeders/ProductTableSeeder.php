<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->category_id = 1;
        $product->name = "Complet Blanc";
        $product->description = "Un pull et un jogging blanc";
        $product->prix = rand(10,80);
        $product->taille = "XS";
        $product->image = "hom (1).jpg";
        $product->status = "publié";
        $product->etat = "solde";
        $product->reference = "jhjszhuiercbhebvhjfbvher545";
        $product->save();
    }
}



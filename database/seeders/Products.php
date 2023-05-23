<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        foreach(range(1,5) as $value){
            DB::table('products') -> insert([
                'name' => $faker->name,
                'short_description' => $faker->text,
                'slug' => $faker->slug,
                'description' => $faker->text,
                'regular_price' => $faker->randomFloat(2, 1, 100 ),
                'sale_price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
                'SKU' => $faker->slug,
                'stock_status' => $faker->randomElement(['In Stock', 'Out of Stock']),
                'featured' => $faker->randomElement(['Yes', 'No']),
                'quantity' => $faker->randomDigit,
                'image' => $faker->image('public/assets/images/products', 400, 300, null, false),
                'images' => $faker->image('public/assets/images/products', 400, 300, null, false),
            ]);
        }
    }
}

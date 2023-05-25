<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class checkseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,4) as $value){
            DB::table('checkout_info')->insert(
                [
                    'first_name' =>$faker->firstName,
                    'last_name' =>$faker->lastName,
                    'email' =>$faker->email,
                    'p_num' =>$faker->phoneNumber,
                    'address' =>$faker->address,
                    'country' =>$faker->country,
                    'postcode' =>$faker->postcode,
                    'town' =>$faker->streetName,

                ]
                );
        }
    }
}

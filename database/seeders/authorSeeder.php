<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class authorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Events');
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('authors')->truncate();

        \Illuminate\Support\Facades\DB::table('authors')->insert([
            [
                'id'=>1,
                'name'=>$faker->firstName
            ],
            [
                'id'=>2,
                'name'=>$faker->firstName
            ],
            [
                'id'=>3,
                'name'=>$faker->firstName
            ],
            [
                'id'=>4,
                'name'=>$faker->firstName
            ],
            [
                'id'=>5,
                'name'=>$faker->firstName
            ],
            [
                'id'=>6,
                'name'=>$faker->firstName
            ],
            [
                'id'=>7,
                'name'=>$faker->firstName
            ],
            [
                'id'=>8,
                'name'=>$faker->firstName
            ],
            [
                'id'=>9,
                'name'=>$faker->firstName
            ],
            [
                'id'=>10,
                'name'=>$faker->firstName
            ]
        ]);


        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

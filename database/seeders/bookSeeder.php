<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class bookSeeder extends Seeder
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
        \Illuminate\Support\Facades\DB::table('books')->truncate();

        \Illuminate\Support\Facades\DB::table('books')->insert([
            [
                'bookid'=>1,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>2,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>3,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>4,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>5,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>6,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>7,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>8,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>9,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>10,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>11,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>12,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>13,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>14,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ],
            [
                'bookid'=>15,
                'authorid'=>$faker->numberBetween(1,10),
                'title'=>$faker->lastName,
                'ISBN'=>$faker->streetName,
                'pub_year'=>$faker->numberBetween(1990,1999),
                'available'=>$faker->numberBetween(1,2)
            ]
        ]);


        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProfumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) {
            DB::table('profumes')->insert([
                'name' => $faker->name(),
                'description' => $faker->text(200),
                'price' => $faker->randomFloat(2, 1, 1000),
                'quantity' => $faker->randomNumber(4, false),
                'brand' => $faker->name(),
                'image' => $faker->image(null, 400, 600, 'profumes'),
                'sponsored' => $faker->boolean()
            ]);
        }
    }
}

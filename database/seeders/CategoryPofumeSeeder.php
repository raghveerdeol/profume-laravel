<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Profume;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoryPofumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $profumes = Profume::all();
        $categories = Category::all()->pluck('id');

        foreach ($profumes as $profume) {

            $randomCategories = $categories->random(2);
            $profume->category()->attach($randomCategories);
        }


    }
}

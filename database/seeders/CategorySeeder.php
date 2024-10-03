<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    $categories = [
        [
            'name' => 'Floral',
            'description' => 'Delicate and romantic scent, characterized by notes of flowers like roses, jasmine, and peonies.'
        ],
        [
            'name' => 'Woody',
            'description' => 'Warm and earthy aroma with essences of woods like sandalwood, cedar, and patchouli.'
        ],
        [
            'name' => 'Oriental',
            'description' => 'Intense and seductive fragrance with spicy notes of cinnamon, vanilla, and incense.'
        ],
        [
            'name' => 'Citrus',
            'description' => 'Fresh and sparkling scent, dominated by citrus essences like lemon, orange, and bergamot.'
        ],
        [
            'name' => 'Spicy',
            'description' => 'Bold and lively aroma, characterized by notes of black pepper, cloves, and nutmeg.'
        ],
        [
            'name' => 'Chypre',
            'description' => 'Sophisticated fragrance with a blend of musky, woody, and citrus notes.'
        ],
        [
            'name' => 'Fruity',
            'description' => 'Sweet and juicy scent, with hints of fruits like apple, pear, and peach.'
        ],
        [
            'name' => 'Fougère',
            'description' => 'Fresh and herbaceous aroma with notes of lavender, fern, and moss.'
        ],
        [
            'name' => 'Gourmand',
            'description' => 'Delicious and enveloping fragrance inspired by desserts like chocolate and caramel.'
        ],
        [
            'name' => 'Aquatic',
            'description' => 'Fresh and light scent reminiscent of the smell of the sea and clear water.'
        ]
    ];

    foreach ($categories as $category) {
        Category::create($category);
    }

    }
}

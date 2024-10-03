<?php

namespace Database\Seeders;

use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $votesData = [
            [
                'name' => 'Terrible',
                'vote' => '1'
            ],
            [
                'name' => 'Bad',
                'vote' => '2'
            ],
            [
                'name' => 'Average',
                'vote' => '3'
            ],
            [
                'name' => 'Good',
                'vote' => '4'
            ],
            [
                'name' => 'Excellent',
                'vote' => '5'
            ],
        ];

        foreach ($votesData as $vote) {
            Vote::create($vote);
        }
    }
}

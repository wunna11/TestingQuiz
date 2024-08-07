<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $options = [
            [
                'question_id' => 1,
                'text' => 'France',
                'type' => 'left',
            ],

            [
                'question_id' => 1,
                'text' => 'Japan',
                'type' => 'left',
            ],

            [
                'question_id' => 1,
                'text' => 'Cameron',
                'type' => 'left',
            ],

            [
                'question_id' => 1,
                'text' => 'USA',
                'type' => 'left',
            ],

            [
                'question_id' => 2,
                'text' => 'Asia',
                'type' => 'right',
            ],

            [
                'question_id' => 2,
                'text' => 'America',
                'type' => 'right',
            ],

            [
                'question_id' => 2,
                'text' => 'Europe',
                'type' => 'right',
            ],

            [
                'question_id' => 2,
                'text' => 'Africa',
                'type' => 'right',
            ],
        ];

        foreach ($options as $option) {
            Option::create($option);
        }
    }
}

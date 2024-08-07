<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                "id"=> 1,
                'title' => 'Please match flags of the following countries in order',
            ],

            [   
                'id'=> 2,
                'title' => 'Please match number of the following text in order '
            ]
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}

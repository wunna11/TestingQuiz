<?php

namespace Database\Seeders;

use App\Models\CorrectMatch;
use App\Models\Question;
use App\Models\Option;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $question1 = Question::create(['title' => 'Match the following items']);

        $leftOption1 = Option::create(['question_id' => $question1->id, 'text' => 'France', 'type' => 'left']);
        $leftOption2 = Option::create(['question_id' => $question1->id, 'text' => 'Japan', 'type' => 'left']);
        $leftOption3 = Option::create(['question_id' => $question1->id, 'text' => 'Cameron', 'type' => 'left']);
        $leftOption4 = Option::create(['question_id' => $question1->id, 'text' => 'USA', 'type' => 'left']);

        $rightOption1 = Option::create(['question_id' => $question1->id, 'text' => 'Africa', 'type' => 'right']);
        $rightOption2 = Option::create(['question_id' => $question1->id, 'text' => 'Asia', 'type' => 'right']);
        $rightOption3 = Option::create(['question_id' => $question1->id, 'text' => 'Europe', 'type' => 'right']);
        $rightOption4 = Option::create(['question_id' => $question1->id, 'text' => 'America', 'type' => 'right']);

        CorrectMatch::create(['question_id' => $question1->id, 'left_option_id' => $leftOption1->id, 'right_option_id' => $rightOption3->id]);
        CorrectMatch::create(['question_id' => $question1->id, 'left_option_id' => $leftOption2->id, 'right_option_id' => $rightOption2->id]);
        CorrectMatch::create(['question_id' => $question1->id, 'left_option_id' => $leftOption3->id, 'right_option_id' => $rightOption1->id]);
        CorrectMatch::create(['question_id' => $question1->id, 'left_option_id' => $leftOption4->id, 'right_option_id' => $rightOption4->id]);

        $question2 = Question::create(['title' => 'Match the following items']);

        $left_opt_1 = Option::create(['question_id' => $question2->id, 'text' => 'eight', 'type' => 'left']);
        $left_opt_2 = Option::create(['question_id' => $question2->id, 'text' => 'one', 'type' => 'left']);
        $left_opt_3 = Option::create(['question_id' => $question2->id, 'text' => 'five', 'type' => 'left']);
        $left_opt_4 = Option::create(['question_id' => $question2->id, 'text' => 'six', 'type' => 'left']);

        $right_opt_1 = Option::create(['question_id' => $question2->id, 'text' => '5', 'type' => 'right']);
        $right_opt_2 = Option::create(['question_id' => $question2->id, 'text' => '6', 'type' => 'right']);
        $right_opt_3 = Option::create(['question_id' => $question2->id, 'text' => '8', 'type' => 'right']);
        $right_opt_4 = Option::create(['question_id' => $question2->id, 'text' => '1', 'type' => 'right']);

        CorrectMatch::create(['question_id' => $question2->id, 'left_option_id' => $left_opt_1->id, 'right_option_id' => $right_opt_3->id]);
        CorrectMatch::create(['question_id' => $question2->id, 'left_option_id' => $left_opt_2->id, 'right_option_id' => $right_opt_4->id]);
        CorrectMatch::create(['question_id' => $question2->id, 'left_option_id' => $left_opt_3->id, 'right_option_id' => $right_opt_1->id]);
        CorrectMatch::create(['question_id' => $question2->id, 'left_option_id' => $left_opt_4->id, 'right_option_id' => $right_opt_2->id]);
    }
}

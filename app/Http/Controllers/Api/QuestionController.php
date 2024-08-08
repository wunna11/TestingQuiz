<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with(['options', 'correctMatches'])->get();

        $response_data = [
            'data' => $questions,
            'message' => 'Successfully'
        ];

        return response()->json($response_data);
    }
}

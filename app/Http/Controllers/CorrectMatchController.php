<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCorrectMatchRequest;
use App\Http\Requests\UpdateCorrectMatchRequest;
use App\Models\CorrectMatch;
use App\Models\Option;
use Illuminate\Http\Request;

class CorrectMatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $left_options = Option::where("question_id", $id)->where("type", 'left')->get();
        $right_options = Option::where("question_id", $id)->where("type", 'right')->get();

        return view("question.match", compact("left_options", "right_options", "id"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {

        $left_options = $request->left_options;
        $right_options = $request->right_options;

        foreach (array_combine($left_options, $right_options) as $left => $right) {
            CorrectMatch::create(['question_id' => $id, 'left_option_id' => $left, 'right_option_id' => $right]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CorrectMatch $correctMatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CorrectMatch $correctMatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCorrectMatchRequest $request, CorrectMatch $correctMatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CorrectMatch $correctMatch)
    {
        //
    }
}

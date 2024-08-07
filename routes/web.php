<?php

use App\Http\Controllers\CorrectMatchController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('question', [QuestionController::class, 'create'])->name('question.create');
Route::post('question', [QuestionController::class, 'store'])->name('question.store');
Route::get('match/{id}', [CorrectMatchController::class, 'index'])->name('correct-match.index');
Route::post('match/{id}', [CorrectMatchController::class,'store'])->name('correct-match.store');
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionsController extends Controller
{
    public function show($id) {

        $question = Question::findOrFail($id);

        return view('questions.show', ['question' => $question]);
    }
}

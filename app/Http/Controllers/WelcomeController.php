<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class WelcomeController extends Controller
{
    public function index() {
        $questions = Question::orderBy('id', 'desc')->get();

        return view('welcome.index', ['questions' => $questions]);
    }
}

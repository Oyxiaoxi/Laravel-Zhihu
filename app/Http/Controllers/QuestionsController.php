<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function index()
    {
    }

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }
}

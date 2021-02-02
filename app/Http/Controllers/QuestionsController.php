<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function index()
    {
    }

    public function show($questionId)
    {
        $question = Question::whereNotNull('published_at')->findOrFail($questionId);

        return view('questions.show', compact('question'));
    }
}

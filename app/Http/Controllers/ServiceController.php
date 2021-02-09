<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ServiceResource;
use App\Question;
use App\Answer;
use App\Category;

class ServiceController extends Controller
{
    public function getAll()
    {
        // get questions
        $questions = Question::select('questions_id', 'description', 'categories_id')->get();
        $answers = [];
        $data = [];

        foreach ($questions as $questions_id) {
            $answer = Answer::select('description', "correct_answer", 'questions_id', 'categories_id')->where('questions_id', $questions_id->questions_id)->get();
            $answers[$questions_id->questions_id] = $answer;
        }

        foreach ($questions as $question) {
            // echo $answers[$question->questions_id]."<br><br><br>";
            array_push($data, ['questions_id' => $question->questions_id, 'description' => $question->description, 'categories_id' => $question->categories_id, "answers" => $answers[$question->questions_id]]);
        }
        
        return response()->json($data);

    }
    
    public function getCategories()
    {
        $categories = Category::select('categories_id', 'name')->get();
        return response()->json($categories);
    }
}

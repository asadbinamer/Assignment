<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\AddQuestion;
use DB;
class AddMultipleChecksController extends Controller
{
     public function store(Request $request ,Question $question){

    	 $this->validate(request(), [
           
            'question'=>'required' ,
            'answer'=>'required' ,
            'correct'=>'required'

    	]);

    	
    	AddQuestion::create([

    		'question'=>request('question'),



    		'answer'=>request('answer'),
    		'correct'=>request('correct'),
    		'question_id'=>$question->id



    		]);

    

    	return redirect('/questionairs');
    }
}

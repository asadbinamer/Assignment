<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\AddQuestion;
use DB;

class AddQuestionsController extends Controller
{
    public function store(Request $request ,Question $question){

    	 $this->validate(request(), [
           
            'question'=>'required' ,
            'answer'=>'required'

    	]);

    	
    	AddQuestion::create([

    		'question'=>request('question'),



    		'answer'=>request('answer'),
    		'question_id'=>$question->id



    		]);

    	// AddQuestion::create(array(

     //             'question'=>$data['question'],
     //             'answer'=>$data['answer'],
     //             'question_id'=>$question->id
              
    	// 	));
      // DB::table('add_questions')->insert(
      //   array('question' => request('question'),
      //     'answer' => request('answer'),
      //     'question_id' => $question->id ));

    	return redirect('/questionairs');
    }
}

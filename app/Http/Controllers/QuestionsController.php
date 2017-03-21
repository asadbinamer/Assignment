<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\AddQuestion;

class QuestionsController extends Controller
{
    public function index(){
         
         $question=Question::all();
    	return view('student.create' , compact('question'));
    }

    public function show(){

    	return view ('student.form');
    }

    public function formshow($id){

          $question=Question::find($id);
    	return view ('student.addquestions' , compact('question'));
    }

    public function store(){

    	$this->validate(request() ,[

    		'questionname'=>'required',
    		'duration'=>'required',
    		'time'=>'required',
    		'radio'=>'required'

    		]);

    	Question::create([

    		'question_name'=>request('questionname'),

    		'duration'=>request('duration'),

    		'time'=>request('time'),

    		'resume'=>request('radio')]);

    	return redirect('/questionairs');



    }

    public function edit(Question $id){
    
       $id=Question::find($id);
        return view('student.edit' , compact('id'));
    }

    public function update(Question $id){

        $id=Question::find($id);

    $id->update([

        'question_name'=>request('questionname') ,
         'duration' => request('duration'),
         'time' =>request('time'),
         'resume'=>request('radio')

         ]);

    return redirect('/questionairs');

    }

    public function delete(Question $id){

        $delete=Question::find($id);
        $delete->delete();

        return redirect('/questionairs');
    }
}

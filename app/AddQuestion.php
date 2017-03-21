<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddQuestion extends Model
{

protected $casts = [
    'question' => 'array',
    'answer' => 'array',
    'correct'=>'array'
];

    protected $fillable=array('question_id', 'question' , 'answer' , 'correct');


    public function question(){

    	$this->belongsTo(Question::class);
    }

}



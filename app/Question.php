<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['question_name' , 'duration' , 'time' , 'resume'];


public function addquestion(){

	$this->hasMany(AddQuestion::class);
}

}
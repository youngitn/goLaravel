<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\Student as StudentEloquent;//StudentEloquent為自取名稱

class Score extends Model
{
    
    protected $table = 'score';
    

    public function student(){
    	return $this->belongsTo(StudentEloquent::class);
    }

    /*
    Query Scopes
Defining A Query Scope

Scopes allow you to easily re-use query logic in your models. To define a scope, simply prefix a model method with scope:
    */
    public function scopeOrderByTotal($query){
    	return $query->orderBy('score.total','DESC');
    }

    public function scopeOrderBySubject($query){
    	return $query->orderBy('score.chinese','DESC')->orderBy('score.english','DESC')->orderBy('score.math','DESC');
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use \App\User as UserEloquent;//自取名稱
use \App\Score as ScoreEloquent;//自取名稱

use DB;

class Student extends Model
{
    
    protected $table = 'student';


    public function user(){
    	return $this->belongsTo(UserEloquent::class);
    }

    public function score(){
    	return $this->hasOne(ScoreEloquent::class);
    }

}


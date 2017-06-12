<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Route;
use View;
use App\Score as ScoreEloquent;

class BoardController extends Controller
{
    //index
    public function getIndex()
    {
        return View::make('board', ['scores'=>ScoreEloquent::with('student')->orderByTotal()->orderBySubject()->get()]);
        
        //return view('board');
    }

    public function gatName()
    {
        return Route::currentRouteAction();
    }
}

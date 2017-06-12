<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/','HomeController@index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('board','BoardController@getIndex');
//Route::controller('board','BoardController');
Route::group(['prefix'=>'student'],function(){
   
    // Route::get('{student_no}', function ($student_no) {
    //     return "stu no is:".$student_no;
    // });

    Route::get('{student_no}', 
        [
            'as'=>'student',//used like {{ route('student',['student_no'=>'S123465789']) }} in view.
            'uses'=> 'StudentController@getStudentData'
        ]
    
   );

    Route::get('{student_no}/score', function ($student_no) {
        return "stu no is:".$student_no."all score";
    });
});
Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('edit/{student_no}','SchoolController@getEdit');

Route::post('edit/{student_no}','SchoolController@postEdit');
//-----------------------------------------------------------------------
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');

// 認證路由...
Route::auth();


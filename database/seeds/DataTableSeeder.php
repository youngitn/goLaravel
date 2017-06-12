<?php

use Illuminate\Database\Seeder;
use App\User as UserEloquent;
use App\Student as StudentEloquent;
use App\Score as ScoreEloquent;

class DataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*$user=UserEloquent::create(
            [
                'name'=>'Sam',
                'email'=>'sam@mail.com',
                'password'=>bcrypt('abc123')
            ]
        );

        $student = StudentEloquent::create(
            [
                'user_id'=>$user->id,
                'no'=>'222',
                'tel'=>'1919'
            ]
        );

        $score = ScoreEloquent::create(
            [
                'student_id'=>$student->id,
                'chinese'=>60,
                'english'=>60,
                'math'=>60,
                'total'=>180
            ]
        );*/

        $scores = factory(ScoreEloquent::class,20)->create()->each(function($score){
        	$score->total=$score->chinese+$score->english+$score->math;
        	$score->save();
        });
    }
}

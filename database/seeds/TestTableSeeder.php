<?php

use Illuminate\Database\Seeder;

use App\Score as Score;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scores = factory(Score::class,20)->create()->each(function($score){
        	$score->total=$score->chinese+$score->english+$score->math;
        	$score->save();
        });
    }
}
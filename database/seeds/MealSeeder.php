<?php

use Illuminate\Database\Seeder;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  $types=['salad','dessert','meal'];
        for($i=1;$i<=10;$i++){
            \App\Meal::create([
                'meal_name'=>'meal '.$i,
                'meal_description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'img_link'=>'img/gallery/0'.$i.'.jpg',
                'type'=>$types[rand(0,2)]
            ]);
        }
    }
}

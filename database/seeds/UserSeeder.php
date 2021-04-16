<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'username'=>'ahmedamine',
            'password'=>bcrypt('123456789'),
            'age'=>25,
            'sportive'=>1,
            'health_status'=>'Diabetes',
            'gender'=>'male',
            'height'=>180,
            'width'=>80
        ]);
    }
}

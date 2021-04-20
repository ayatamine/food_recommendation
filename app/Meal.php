<?php

namespace App;

use App\Meal;
use App\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded =[''];
    public function rating(){
        return
        $rating = Rating::where('user_id',Auth::id())
        ->where('meal_id',$this->id)
        ->first();

    }
}

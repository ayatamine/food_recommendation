<?php

namespace App;

use App\Rating;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded =[''];
    public function rating(){
        return $this->hasOne(Rating::class,'meal_id','id')->withDefault();
    }
}

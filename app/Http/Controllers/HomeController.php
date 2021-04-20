<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meal;
use App\Rating;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function rating()
    {
        $meals = Meal::inRandomOrder()->whereType('meal')->get();
        $desserts = Meal::inRandomOrder()->whereType('dessert')->get();
        $salads = Meal::inRandomOrder()->whereType('salad')->get();
        return view('rating',compact(['meals','desserts','salads']));
    }
    public function rateMeal(Request $request){
        $rate =Rating::where('user_id',Auth::id())
                     ->where('meal_id',$request->meal_id)
                     ->first();

        if(!$rate){
            $rate = Rating::create([
                'meal_id'=>$request->meal_id,
                'user_id'=>Auth::id(),
                'value'=>$request->value,
            ]);
            return response()->json(['message'=>'The meal rated successfuly']);
        }else{
            $rate->value = $request->value;
            $rate->save();
            return response()->json(['message'=>'The meal already rated']);
        }

    }
    public function allMeals(){
        $meals = Meal::all();
        return view ('meal.all_meals',compact('meals'));
    }
    public function addMeal(Request $request){

        $filename = '';
        $destination_path ='img/gallery';
        if($image = $request->file('image')){
           $filename = $destination_path.'/'.time().$image->getClientOriginalName();
           $image->move($destination_path,$filename);
        }
        $meal = Meal::create([
            'meal_name'=>$request->meal_name,
            'meal_description'=>$request->meal_description,
            'type'=>$request->type,
            'img_link'=>$filename
        ]);
        return back();
    }
    public function deleteMeal($id){
       Meal::find($id)->delete();
       return back();
    }

}

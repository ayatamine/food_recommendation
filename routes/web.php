<?php
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', function () {
    return view('auth.register');
})->middleware('guest')->name('homepage');
Route::get('/rating', 'HomeController@rating')->name('rating');
Route::post('/meal/rate', 'HomeController@rateMeal')->name('rate_meal');

Route::get('/addmeal', function(){
  return view('meal.addMeal');
})->name('new_meal');
Route::get('/allmeals', 'HomeController@allMeals')->name('all_meals');
Route::get('/meal/{id}/delete', 'HomeController@deleteMeal')->name('delete_meal');

Route::post('/meal/add', 'HomeController@addMeal')->name('add_meal');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/seed_data',function(){
  Artisan::call('migrate:refresh', [
    '--force' => true
 ]);
  Artisan::call('db:seed', [
    '--force' => true
 ]);
  return 'done';
});

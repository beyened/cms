<?php

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;


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

//Route::get('/', function () {
//    return view('welcome');
//});


/*
|--------------------------------------------------------------------------
| CURD Application
|--------------------------------------------------------------------------
*/

//Create Group

Route::group(['middleware' == 'web'], function(){

    Route::resource('/posts', 'PostsController');

    // Date and time
    Route::get('/dates', function (){

        $date = new DateTime('+1 week');
        echo $date->format('m-d-Y');

        echo '<br>';
        echo Carbon::now();;

        echo '<br>';
        echo Carbon::now()->subMonth(4)->diffForHumans();

        echo '<br>';
        echo Carbon::now()->addDays(4)->diffForHumans();

        echo '<br>';
        echo Carbon::now()->subMonth(4)->diffForHumans();

        echo '<br>';
        echo Carbon::now()->shortDayName;

        $dt = Carbon::now();
        echo $dt->diffInYears($dt->copy()->addYear());  // 1
    });

    //Accessor It helps to get value by manipulate it, there is function on User Model
    Route::get('/getname', function (){
       $user = User::find(1);
       echo $user->name;
    });


//Mutators It helps to save value to database by manipulate it, there is function on User Model
    Route::get('/setname', function (){
        $user = User::find(1);
        $user->name = "Desta";
        $user->save();
    });

});









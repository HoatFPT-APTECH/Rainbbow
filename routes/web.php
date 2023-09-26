<?php

use App\Http\Controllers\AdminControllers\DirectorController;
use App\Http\Controllers\AdminControllers\MovieController;

use App\Http\Controllers\AdminControllers\PhotoController;
use App\Http\Controllers\Controller;


use App\Http\Controllers\AdminControllers\CinemaController;
use App\Http\Controllers\AdminControllers\ProductorController;
use App\Http\Controllers\RainbowControllers\homeController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\RainbowControllers\RegisterController;
use App\Http\Controllers\RainbowControllers\Movie_SingleController;
use App\Models\Cinema;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'rainbow'],function(){
    Route::get('/',[HomeController::class,'index'])->name("rainbow.home");


    Route::get('/register',[RegisterController::class,'index']);
    Route::get("/movie_single/{id}",[Movie_SingleController::class,'index']);


});
Route:: group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('AdminViews.index',['page'=>'dasdboard']);
    });

    Route::resource('/movie',MovieController::class);
    Route::resource('/photo',PhotoController::class);

});


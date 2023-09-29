<?php

use App\Http\Controllers\AdminControllers\DirectorController;
use App\Http\Controllers\AdminControllers\MovieController;
use App\Http\Controllers\AdminControllers\PhotoController;
use App\Http\Controllers\AdminControllers\PerformerController;
use App\Http\Controllers\AdminControllers\UserController;
use App\Http\Controllers\AdminControllers\RoleController;
use App\Http\Controllers\AdminControllers\BookingController;
use App\Http\Controllers\AdminControllers\TicketController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\AdminControllers\CinemaController;
use App\Http\Controllers\AdminControllers\ProductorController;
use App\Http\Controllers\RainbowControllers\homeController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\RainbowControllers\RegisterController;
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

});
Route:: group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('AdminViews.index',['page'=>'dasdboard']);
    });
    
    Route::resource('/movie',MovieController::class);
    


//hien thi trang show bang cho nguoi dung them sua xoa
Route::get('/cinema',[CinemaController::class,'index']);
//chi tiet 1 ban ghi
Route::get('/cinema/show/{id}',[CinemaController::class,'show']);
//hien thi trang edit voi du lieu cu cua  cho nguoi dung sua
Route::get('/cinema/edit/{id}',[CinemaController::class,'edit']);
Route::post("/cinema/update/{id}",[CinemaController::class,'update']);
//show trang them sua xoa 1 ban gi
Route::get("/cinema/create",[CinemaController::class,'create']);
Route::post("/cinema/store",[CinemaController::class,'store']);
//xoa 1 ban ghi 
Route::get("/cinema/delete/{id}",[CinemaController::class,'destroy']);


     Route::get('/productor',[ProductorController::class,'index']);
     Route::get('/productor/show/{id}',[ProductorrController::class,'show']);
     Route::get('/productor/edit/{id}',[ProductorController::class,'edit']);
     Route::post('/productor/update/{id}',[ProductorController::class,'update']);
     Route::get('/productor/create',[ProductorController::class,'create']);
     Route::post('/productor/store',[ProductorController::class,'store']);
     Route::get('/productor/delete/{id}',[ProductorController::class,'destroy']);



Route::resource('/photo',PhotoController::class);

    // Route::resource('/performer',PerformerController::class);
    Route::get('/performer',[PerformerController::class,'index']);
    Route::get('/performer/show/{id}',[PerformerController::class,'show']);
    Route::get('/performer/edit/{id}',[PerformerController::class,'edit']);
    Route::post('/performer/update/{id}',[PerformerController::class,'update']);
    Route::get('/performer/create',[PerformerController::class,'create']);
    Route::post('/performer/store',[PerformerController::class,'store']);
    Route::get('/performer/delete/{id}',[PerformerController::class,'destroy']);


    // Route::resource('/performer',PerformerController::class);
     Route::get('/user',[UserController::class,'index']);
     Route::get('/user/show/{id}',[UserController::class,'show']);
     Route::get('/user/edit/{id}',[UserController::class,'edit']);
     Route::post('/user/update/{id}',[UserController::class,'update']);
     Route::get('/user/create',[UserController::class,'create']);
     Route::post('/user/store',[UserController::class,'store']);
     Route::get('/user/delete/{id}',[UserController::class,'destroy']);


    //Route::resource('/role',RoleController::class);
    Route::get('/role',[RoleController::class,'index']);
    Route::get('/role/show/{id}',[RoleController::class,'show']);
    Route::get('/role/edit/{id}',[RoleController::class,'edit']);
    Route::post('/role/update/{id}',[RoleController::class,'update']);
    Route::get('/role/create',[RoleController::class,'create']);
    Route::post('/role/store',[RoleController::class,'store']);
    Route::get('/role/delete/{id}',[RoleController::class,'destroy']);

    //
    Route::resource('/photo',PhotoController::class);

   //
   Route::get('/booking',[BookingController::class,'index']);
   Route::get('/booking/create',[BookingController::class,'create']);
   Route::post('/booking/store',[BookingController::class,'store']);
   Route::get('/booking/edit/{id}',[BookingController::class,'edit']);
   Route::post('/booking/update/{id}',[BookingController::class,'update']);
   Route::get('/booking/show/{id}',[BookingController::class,'show']);
   Route::get('/booking/delete/{id}',[BookingController::class,'destroy']);

   //
   Route::get('/ticket',[TicketController::class,'index']);
   Route::get('/ticket/create',[TicketController::class,'create']);
   Route::post('/ticket/store',[TicketController::class,'store']);
   Route::get('/ticket/edit/{id}',[TicketController::class,'edit']);
   Route::post('/ticket/update/{id}',[TicketController::class,'update']);
   Route::get('/ticket/show/{id}',[TicketController::class,'show']);
   Route::get('/ticket/delete/{id}',[TicketController::class,'destroy']);
});



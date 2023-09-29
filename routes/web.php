<?php
use App\Http\Controllers\AdminControllers\DirectorController;
use App\Http\Controllers\AdminControllers\MovieController;

use App\Http\Controllers\AdminControllers\PhotoController;
use App\Http\Controllers\AdminControllers\PerformerController;
use App\Http\Controllers\AdminControllers\UserController;
use App\Http\Controllers\AdminControllers\RoleController;
use App\Http\Controllers\Controller;

use App\Http\Controllers\AdminControllers\CinemaController;
use App\Http\Controllers\AdminControllers\ProductorController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\RainbowControllers\homeController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\RainbowControllers\MovieBookingController;
use App\Http\Controllers\RainbowControllers\RegisterController;
use App\Models\Cinema;
use App\Models\Productor;
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
    Route::get('/movie_booking/{id}',[MovieBookingController::class,'index']);

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
});
Route:: group(['prefix'=>'/api'],function(){
    Route::post("/login",[LoginController::class,'HandleLogin']);
    Route::post("/getListShowTimeByIdMovie",[BookingController::class,'GetListShowByIdMovie']);
    // Route::post("/GetListShowGroupByCinemaStartDate",[BookingController::class,"GetListShowGroupByCinemaStartDate"]);
    
});

<?php
use App\Http\Controllers\AdminControllers\DirectorController;
use App\Http\Controllers\AdminControllers\MovieController;
use App\Http\Controllers\AdminControllers\CinemaController;
use App\Http\Controllers\AdminControllers\ProductorController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\RainbowControllers\homeController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\RainbowControllers\MovieBookingController;
use App\Http\Controllers\RainbowControllers\RegisterController;
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
    Route::get('/movie_booking/{id}',[MovieBookingController::class,'index']);

});
Route:: group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('AdminViews.index',['page'=>'dasdboard']);
    });
    Route::resource('/movie',MovieController::class);
    
    Route::resource('/productor',ProductorController::class);
    Route::post('/productor/store',[ProductorController::class,'store']);
    Route::get("/productor/dalete/{id}",[ProductorController::class,'destroy']);
    Route::resource('/director',DirectorController::class);
    Route::post('/director/store',[DirectorController::class,'store']);
    Route::get("/director/dalete/{id}",[DirectorController::class,'destroy']);

    Route::resource('/cinema',CinemaController::class);
    Route::post('/cinema/store',[CinemaController::class,'store']);
    Route::get("/cinema/delete/{id}",[CinemaController::class,'destroy']);


     // ví dụ đẻ hiện cái trang mà show cái bảng cho người dyùng thêm sửa xoá 
     Route::get('/cinema',[CinemaController::class,'index']);
     // chi tiết một bản ghi
     Route::get('/cinema/show/{id}',[CinemaController::class,'show']);
     //Hiển thị trang edit với dữ liệu cũ của cinema cho người udngfsuaqử
     Route::get('/cinema/edit/{id}',[CinemaController::class,'edit']);
     Route::post("/cinema/update/{id}",[CinemaController::class,'update']);
     // show trang thêm một bản ghi cinema
     Route::get("/cinema/create",[CinemaController::class,'create']);
     Route::post("/cinema/store",[CinemaController::class,'store']);
     // xoá một bản ghi cinema
     Route::get("/cinema/delete/{id}",[CinemaController::class,'destroy']);

});
Route:: group(['prefix'=>'/api'],function(){
    Route::post("/login",[LoginController::class,'HandleLogin']);
    Route::post("/getListShowTimeByIdMovie",[BookingController::class,'GetListShowByIdMovie']);
    // Route::post("/GetListShowGroupByCinemaStartDate",[BookingController::class,"GetListShowGroupByCinemaStartDate"]);
    
});

<?php

use App\Http\Controllers\AdminControllers\AccountClientController;
use App\Http\Controllers\AdminControllers\AccountEmployeeController;
use App\Http\Controllers\AdminControllers\DirectorController;
use App\Http\Controllers\AdminControllers\MovieController;
use App\Http\Controllers\AdminControllers\PhotoController;
use App\Http\Controllers\AdminControllers\PerformerController;

use App\Http\Controllers\AdminControllers\RoleController;
use App\Http\Controllers\AdminControllers\BookingController;
use App\Http\Controllers\AdminControllers\TicketController;
use App\Http\Controllers\AdminControllers\ShowtimeController;
use App\Http\Controllers\AdminControllers\RoomController;


use App\Http\Controllers\AdminControllers\CinemaController;
use App\Http\Controllers\AdminControllers\DashboardController;
use App\Http\Controllers\AdminControllers\LoginController as AdminControllersLoginController;
use App\Http\Controllers\AdminControllers\ProductorController;
use App\Http\Controllers\Api\BookingController as ApiBookingController;
use App\Http\Controllers\AdminControllers\PromotionController;

use App\Http\Controllers\AdminControllers\PromotionCategroryController;
use App\Http\Controllers\AdminControllers\PromotionUserController;
use App\Http\Controllers\Api\AutoSendMailController;
use App\Http\Controllers\Api\HeaderController;
use App\Http\Controllers\Api\PromotionController as ApiPromotionController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\SeatController;
use App\Http\Controllers\Api\ShowtimeController as ApiShowtimeController;
use App\Http\Controllers\MailControllers\MailBookingController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\RainbowControllers\BookingTypeController;
use App\Http\Controllers\RainbowControllers\ConfirmationScreenController;
use App\Http\Controllers\RainbowControllers\HomeController;
use App\Http\Controllers\RainbowControllers\Movie_CinemaController;
use App\Http\Controllers\RainbowControllers\MovieBookingController;
use App\Http\Controllers\RainbowControllers\RegisterController;
use App\Http\Controllers\RainbowControllers\Movie_SingleController;
use App\Http\Controllers\RainbowControllers\SeatBookingController;


use App\Http\Controllers\RainbowControllers\Movie_CategoryController;
use App\Http\Controllers\RainbowControllers\Account_DetailsController;
use App\Http\Controllers\RainbowControllers\ContactController;
use App\Http\Controllers\StartController;
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

Route::get('/', [StartController::class,'index']);
Route::get('/NotFound',[NotFoundController::class,'index']);

Route::group(['prefix'=>'rainbow'],function(){
    Route::get('/',[HomeController::class,'index'])->name("rainbow.home");
    Route::get('/register',[RegisterController::class,'index']);
    Route::post('/register/store',[RegisterController::class,'store']);

    Route::get("/movie_single/{id}",[Movie_SingleController::class,'index']);

    Route::get('/movie_booking/{id}', [MovieBookingController::class, 'index']);
    Route::get('/seat_booking/{id}', [SeatBookingController::class, 'index']);
    Route::get('/movie_category', [Movie_CategoryController::class, 'index']);
    Route::get('/movie_cinema', [Movie_CinemaController::class, 'index']);

    Route::get('/booking_type', [BookingTypeController::class, 'index']);
    Route::get('/booking_type/create', [ConfirmationScreenController::class, 'create']);
    Route::get('/confirmation_screen/{id}', [ConfirmationScreenController::class, 'index']);


    Route::get('/search', [Movie_CategoryController::class, 'Search']);
    Route::get('/searchcinema', [Movie_CinemaController::class, 'Search']);
    Route::get('/account_details/{Id}', [Account_DetailsController::class, 'index']);
    Route::get('/account_booking/{Id}', [Account_DetailsController::class, 'booking']);
    Route::post('/account_details/update/{Id}', [Account_DetailsController::class, 'update']);
    Route::post('/account_details/updateURL/{Id}', [Account_DetailsController::class, 'updateURL']);
    Route::get('/account_promotion/{Id}', [Account_DetailsController::class, 'promotion']);


    Route::get('/contact', [ContactController::class, 'index']);
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('/',[AdminControllersLoginController::class,'index']);
    Route::get('/dasdboard', [DashboardController::class,'index']);

   // Route::resource('/movie', MovieController::class);
   Route::get('/movie', [MovieController::class, 'index']);
   Route::get('/movie/show/{id}', [MovieController::class, 'show']);
   Route::get('/movie/edit/{id}', [MovieController::class, 'edit']);
   Route::post('/movie/update/{id}', [MovieController::class, 'update']);
   Route::get('/movie/create', [MovieController::class, 'create']);
   Route::post('/movie/store', [MovieController::class, 'store']);
   Route::get('/movie/delete/{id}', [MovieController::class, 'destroy']);



    //hien thi trang show bang cho nguoi dung them sua xoa
    Route::get('/cinema', [CinemaController::class, 'index']);
    //chi tiet 1 ban ghi
    Route::get('/cinema/show/{id}', [CinemaController::class, 'show']);
    //hien thi trang edit voi du lieu cu cua  cho nguoi dung sua
    Route::get('/cinema/edit/{id}', [CinemaController::class, 'edit']);
    Route::post("/cinema/update/{id}", [CinemaController::class, 'update']);
    //show trang them sua xoa 1 ban gi
    Route::get("/cinema/create", [CinemaController::class, 'create']);
    Route::post("/cinema/store", [CinemaController::class, 'store']);
    //xoa 1 ban ghi 
    Route::get("/cinema/delete/{id}", [CinemaController::class, 'destroy']);


    Route::get('/productor', [ProductorController::class, 'index']);
    Route::get('/productor/show/{id}', [ProductorController::class, 'show']);
    Route::get('/productor/edit/{id}', [ProductorController::class, 'edit']);
    Route::post('/productor/update/{id}', [ProductorController::class, 'update']);
    Route::get('/productor/create', [ProductorController::class, 'create']);
    Route::post('/productor/store', [ProductorController::class, 'store']);
    Route::get('/productor/delete/{id}', [ProductorController::class, 'destroy']);


    Route::get('/director', [DirectorController::class, 'index']);
    Route::get('/director/show/{id}', [DirectorController::class, 'show']);
    Route::get('/director/edit/{id}', [DirectorController::class, 'edit']);
    Route::post('/director/update/{id}', [DirectorController::class, 'update']);
    Route::get('/director/create', [DirectorController::class, 'create']);
    Route::post('/director/store', [DirectorController::class, 'store']);
    Route::get('/director/delete/{id}', [DirectorController::class, 'destroy']);


    Route::get('/promotion', [PromotionController::class, 'index']);
    Route::get('/promotion/show/{id}', [PromotionController::class, 'show']);
    Route::get('/promotion/edit/{id}', [PromotionController::class, 'edit']);
    Route::post('/promotion/update/{id}', [PromotionController::class, 'update']);
    Route::get('/promotion/create', [PromotionController::class, 'create']);
    Route::post('/promotion/store', [PromotionController::class, 'store']);
    Route::get('/promotion/delete/{id}', [PromotionController::class, 'destroy']);

    Route::get('/promotionCategrory', [PromotionCategroryController::class, 'index']);
    Route::get('/promotionCategrory/edit/{id}', [PromotionCategroryController::class, 'edit']);
    Route::post('/promotionCategrory/update/{id}', [PromotionCategroryController::class, 'update']);
    Route::get('/promotionCategrory/create', [PromotionCategroryController::class, 'create']);
    Route::post('/promotionCategrory/store', [PromotionCategroryController::class, 'store']);
    Route::get('/promotionCategrory/delete/{id}', [PromotionCategroryController::class, 'destroy']);

    


    Route::get('/promotionUser',[PromotionUserController::class,'index']);
    Route::post('/promotionUser/sendMail',[PromotionUserController::class,'sendMail']);



    //Route::resource('/photo', PhotoController::class);
    Route::get('/photo', [PhotoController::class, 'index']);
    Route::get('/photo/show/{id}', [PhotoController::class, 'show']);
    Route::get('/photo/edit/{id}', [PhotoController::class, 'edit']);
    Route::post('/photo/update/{id}', [PhotoController::class, 'update']);
    Route::get('/photo/create', [PhotoController::class, 'create']);
    Route::post('/photo/store', [PhotoController::class, 'store']);
    Route::get('/photo/delete/{id}', [PhotoController::class, 'destroy']);

    // Route::resource('/performer',PerformerController::class);
    Route::get('/performer', [PerformerController::class, 'index']);
    Route::get('/performer/show/{id}', [PerformerController::class, 'show']);
    Route::get('/performer/edit/{id}', [PerformerController::class, 'edit']);
    Route::post('/performer/update/{id}', [PerformerController::class, 'update']);
    Route::get('/performer/create', [PerformerController::class, 'create']);
    Route::post('/performer/store', [PerformerController::class, 'store']);
    Route::get('/performer/delete/{id}', [PerformerController::class, 'destroy']);


    // Route::resource('/performer',PerformerController::class);
    Route::prefix('/account/client')->group(function () {
        Route::get('/', [AccountClientController::class, 'index']);
        Route::get('/edit/{id}', [AccountClientController::class, 'edit']);
        Route::post('/update/{id}', [AccountClientController::class, 'update']);
        Route::get('/create', [AccountClientController::class, 'create']);
        Route::post('/store', [AccountClientController::class, 'store']);
        Route::get('/delete/{id}', [AccountClientController::class, 'destroy']);
    });
    Route::prefix('/account/employee')->group(function () {
        Route::get('/', [AccountEmployeeController::class, 'index']);
        Route::get('/edit/{id}', [AccountEmployeeController::class, 'edit']);
        Route::post('/update/{id}', [AccountEmployeeController::class, 'update']);
        Route::get('/create', [AccountEmployeeController::class, 'create']);
        Route::post('/store', [AccountEmployeeController::class, 'store']);
        Route::get('/delete/{id}', [AccountEmployeeController::class, 'destroy']);
    });
    
  


    //Route::resource('/role',RoleController::class);
    Route::get('/role', [RoleController::class, 'index']);
    Route::get('/role/show/{id}', [RoleController::class, 'show']);
    Route::get('/role/edit/{id}', [RoleController::class, 'edit']);
    Route::post('/role/update/{id}', [RoleController::class, 'update']);
    Route::get('/role/create', [RoleController::class, 'create']);
    Route::post('/role/store', [RoleController::class, 'store']);
    Route::get('/role/delete/{id}', [RoleController::class, 'destroy']);

    //
    Route::resource('/photo', PhotoController::class);

    //
    Route::get('/booking', [BookingController::class, 'index']);
    Route::get('/booking/search', [BookingController::class, 'Search']);
    Route::get('/booking/create', [BookingController::class, 'create']);
    Route::get('/booking/search', [BookingController::class, 'Search']);
    Route::post('/booking/store', [BookingController::class, 'store']);
    Route::get('/booking/edit/{id}', [BookingController::class, 'edit']);
    Route::post('/booking/update/{id}', [BookingController::class, 'update']);
    Route::get('/booking/show/{id}', [BookingController::class, 'show']);
    Route::get('/booking/delete/{id}', [BookingController::class, 'destroy']);
    Route::post('/booking/updateStatus', [BookingController::class, 'updateStatus']);

    //
    Route::get('/ticket', [TicketController::class, 'index']);
    Route::get('/ticket/create', [TicketController::class, 'create']);
    Route::post('/ticket/store', [TicketController::class, 'store']);
    Route::get('/ticket/edit/{id}', [TicketController::class, 'edit']);
    Route::post('/ticket/update/{id}', [TicketController::class, 'update']);
    Route::get('/ticket/show/{id}', [TicketController::class, 'show']);
    Route::get('/ticket/delete/{id}', [TicketController::class, 'destroy']);


    Route::get('/showtime', [ShowtimeController::class, 'index']);
    Route::get('/showtime/create', [ShowtimeController::class, 'create']);
    Route::post('/showtime/store', [ShowtimeController::class, 'store']);
    Route::get('/showtime/edit/{id}', [ShowtimeController::class, 'edit']);
    Route::post('/showtime/update/{id}', [ShowtimeController::class, 'update']);
    Route::get('/showtime/show/{id}', [ShowtimeController::class, 'show']);
    Route::get('/showtime/delete/{id}', [ShowtimeController::class, 'destroy']);


    Route::get('/room', [RoomController::class, 'index']);
    Route::get('/room/create', [RoomController::class, 'create']);
    Route::post('/room/store', [RoomController::class, 'store']);
    Route::get('/room/edit/{id}', [RoomController::class, 'edit']);
    Route::post('/room/update/{id}', [RoomController::class, 'update']);
    Route::get('/room/show/{id}', [RoomController::class, 'show']);
    Route::get('/room/delete/{id}', [RoomController::class, 'destroy']);
});

Route::group(['prefix' => '/api'], function () {
    Route::post("/login", [LoginController::class, 'HandleLogin']);
    Route::post("/autoLogin", [LoginController::class, 'HandleLoginByToken']);

    Route::get('/header/cinema',[HeaderController::class,'cinema']);
    Route::post("/getListShowTimeByIdMovie", [ApiBookingController::class, 'GetListShowByIdMovie']);
    Route::post("/changeStatusSeatShowtime", [SeatController::class, 'ChangeStatusSeat']);
    Route::post("/checkVoucher", [ApiPromotionController::class, 'check']);
    Route::get('/autoSendMail',[AutoSendMailController::class,'index']);
    Route::get('/showtime/getRoomByCinema/{id}',[ApiShowtimeController::class,'getRoomByCinema']);

    // Route::post("/GetListShowGroupByCinemaStartDate",[BookingController::class,"GetListShowGroupByCinemaStartDate"]);

});
Route::group(['prefix'=>'mail'],function(){
    Route::get('mail_booking/{id}',[MailBookingController::class,'index']);
});


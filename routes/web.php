<?php

use App\Http\Controllers\AdminControllers\MovieController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Derector;
use App\Http\Controllers\AdminControllers\ProductorController;
use App\Http\Controllers\RainbowControllers\homeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Promotion;
use App\Http\Controllers\AdminControllers\DirectorController;
use App\Models\Director;

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
    Route::get('/',function(){
        return view('RainbowViews.index',['page'=>'home']);
    })->name("rainbow.home");
  
    Route::get('/{page}', function($page){
        $url = explode(".", $page)[0];
        $controllerName = $page . "Controller";
        $controllerClass = "App\Http\Controllers\RainbowControllers\\" . $controllerName;      
        return app()->make($controllerClass)->callAction('index',[       
         'page'=>$url
        ]);
    });
    Route::post("/login",[homeController::class,'login']);
    
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
});




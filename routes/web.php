<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminControllers\MovieController;
use App\Http\Controllers\AdminControllers\RoleController;
use App\Http\Controllers\AdminControllers\PerformerController;
use App\Http\Controllers\AdminControllers\UserController;
use App\Http\Controllers\AdminControllers\PhotoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
    });
  
    Route::get('/{page}', function($page){
        $url = explode(".", $page)[0];
        $controllerName = $page . "Controller";
        $controllerClass = "App\Http\Controllers\RainbowControllers\\" . $controllerName;      
        return app()->make($controllerClass)->callAction('index',[       
         'page'=>$url
        ]);
    });
    
});
Route:: group(['prefix'=>'admin'],function(){
    Route::get('/',function(){
        return view('AdminViews.index',['page'=>'dasdboard']);
    });
    Route::resource('/movie',MovieController::class);
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

});

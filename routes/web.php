<?php

use App\Http\Controllers\Controller;
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

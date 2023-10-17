<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UIController extends Controller
{
    public function colorIndex(){
        return view("AdminViews.index",[
            'page'=>'colorManager',
            'CssPage'=>'colorManager',
            'JsPage'=>'colorManager'
        ]);
    }
}

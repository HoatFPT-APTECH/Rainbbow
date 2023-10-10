<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()  {
        return  view('rainbowViews.index', [
            'page' => 'contact',
            'JsPage'=>'',
           
        ]);
    }
}

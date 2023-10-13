<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cinema;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    //
    public function cinema(){
        $cinemas=Cinema::all();
        return response()->json($cinemas,200);
    }
}

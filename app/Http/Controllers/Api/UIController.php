<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;

class UIController extends Controller
{
    //
    public $pathCssColor='RainbowPublic/css/colors.css';
    public $defaultColor1='#4b0082';
    public $defaultColor2='#333333';
    public function ChangeColor(Request $request){
        $color1=$request->input('firtsColor');
        $color2=$request->input('secondColor');
        
        $cssContentSet = ":root {
            --primary-color: linear-gradient(to right, $color1, $color2);
            --secondary-color: #6c757d;
        }";
        try{
            file_put_contents($this->pathCssColor, $cssContentSet);
            return response()->json($cssContentSet,200);
        }catch(Exception $e){
         return response()->json(['err'=>$e],400);
        }
        

       

         
    }
}

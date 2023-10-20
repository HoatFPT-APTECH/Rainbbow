<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\HomeSlide;
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
    public function slideHomeIndex(){
        $slide=[];
       for($i=1;$i<=7;$i++){
        $slideHome=HomeSlide::with(['categorySlide'])->where('SlideCategory_Id',$i)->orderBy('Created_At','desc')->first();
        array_push($slide,$slideHome);
       }
        return view("AdminViews.index",[
            'page'=>'slideHomeChange',
            'slide'=>$slide,
          
            'JsPage'=>'slideHome'
        ]);
    }
    public function convertPathUpLoad($str)
    {

        $listStr = explode("/", $str);
        array_shift($listStr);
        $realPath = implode("/", $listStr);
        return url("storage/" . $realPath);
    }
    public function UpdateSlide(Request $request){
        $category=$request->input('category');
        $fileSrc = $request->file('image');
        $pathSrc =  $fileSrc->store('public/slide');
        $realPathSrc = $this->convertPathUpLoad($pathSrc);
     
        $newHomeSlide= new HomeSlide();

        $newHomeSlide->Src=$realPathSrc;
        $newHomeSlide->SlideCategory_Id=$category;
        $newHomeSlide->save();
        return redirect('/admin/slide_manager');
    }
}

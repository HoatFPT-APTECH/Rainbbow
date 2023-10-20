<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ChangeAccountController extends Controller
{
    public function edit(string $id)
    {
       
        $UserExist= User::where('Id',$id)->first();
        return view('AdminViews.index',['page'=>"ChangeAccount", 'User'=>$UserExist]);
    }
    public function convertPathUpLoad($str)
    {

        $listStr = explode("/", $str);
        array_shift($listStr);
        $realPath = implode("/", $listStr);
        return url("storage/" . $realPath);
    }
    public function update(Request $request, string $id){
       
        $Password= $request->input('Password');
       

        $newUser= User::where('Id',$id)->first();
        if($newUser->Password!=$Password)
        $newUser->Password=md5($Password);
      
       

        if ($request->hasFile('Image')) {
            $fileSrc = $request->file('Image');
            $pathSrc =  $fileSrc->store('public/user_Img');
            $realPathImage = $this->convertPathUpLoad($pathSrc);
            $Image = $realPathImage;
            $newUser->Image=$Image;
           }

        
        $newUser->save();
        //return $this->index();
        return redirect("/admin/changeaccount/edit/$id");
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    //
    public function Index(){

    }
    // 
    public  function v4()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',

            // 32 bits for "time_low"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),

            // 16 bits for "time_mid"
            mt_rand(0, 0xffff),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand(0, 0x0fff) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand(0, 0x3fff) | 0x8000,

            // 48 bits for "node"
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }
    public function HandleLogin(Request $request){
         $UserName=$request->input("UserName");
         $Password=$request->input("Password");
      
        $User = User::where("UserName", $UserName)->where("Password", md5($Password))->first();
        if ($User != null) {
            $Token = $this->v4();
            // tạo token cho account
            $User->Api_token = $Token;
            $User->save();
            $Data=[
                'Login'=>true,
                "User"=>$User,
                "Access_Token"=>$Token
            ];
           return response()->json($Data,200);
        }
        else{
            $Data=[
                "Login"=>false
            ];
            return response()->json($Data,401);
        }
    }
    public function HandleLoginByToken(Request $request){
       $token=$request->input('Token');
        if($token==null)$User=null;
        else {
            $User = User::where("Api_token",$token)->first();
        }

       if ($User != null) {

        $Data=[
            'Login'=>true,
            "User"=>$User,
        
        ];
       return response()->json($Data,200);
    }
    else{
        $Data=[
            "Login"=>false
        ];
        return response()->json($Data,404);
    }
    }
}

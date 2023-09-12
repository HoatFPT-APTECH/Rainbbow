<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isEmpty;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($page)
    {
        // //
        // $className= get_class($this);
        // $page=str_replace('Controller','',$className);

        return  view('rainbowViews.index', ['page' => $page]);
    }
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

    public function login(Request $request)
    {
        $UserName = $request->input("UserName");
        $Password = $request->input("Password");
        $User = User::where("UserName", $UserName)->where("Password", $Password)->first();
        if ($User != null) {
            $token = $this->v4();
            $User->Api_token = $token;
            $User->save();
            $CookieSet = Cookie::make("access_token", $token, 60);
            response("set_cookie")->cookie($CookieSet);
            // return Redirect::route("rainbow.home");
            return response("set_cookie: " . $CookieSet)->cookie($CookieSet);
        }
    }
}

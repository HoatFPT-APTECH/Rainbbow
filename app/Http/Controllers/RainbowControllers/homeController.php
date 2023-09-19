<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()// $page là page muốn hiển thị , $data là data muốn truyền thêm vào 
    {
       
       $page='home';
    //    $ListUpcomingMovie=Movie::where('')->get();
    //    $ListReleasedMovie= Movie::where("")->get();
        return  view('rainbowViews.index', ['page' => $page]);
    }
  

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\VoucherCodeMail;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StartController extends Controller
{
    //
    public function index(){
      
 
    return view('welcome');
    }
 
}

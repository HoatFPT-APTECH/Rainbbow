<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    public function index(){
        $listdirector = Director::all();
        return view('AdminView.index',['page' => 'Director', 'danh sach'])
    }
}

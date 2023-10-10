<?php

namespace App\Http\Controllers\RainbowControllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $page='register';

        
        return view('RainbowViews.index',['page'=>$page, 'JsPage'=>'register']);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $UserName= $request->input('UserName');
         $Password= $request->input('Password');
         $newUser= new User();
         $newUser->UserName=$UserName;
         $newUser->Password=md5($Password);
         $newUser->Role_Id=3;
         $newUser->save();
        // return $this->index();
       return redirect("/rainbow");
        // return response()->json($newUser,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

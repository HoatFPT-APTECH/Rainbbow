<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Director;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listDirector= Director::where('Deleted',0)->get();
         return view('AdminViews.index',['page'=>"director",'danhsach'=>$listDirector]);
         //return response()->json($listPerformer,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"directorCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $name= $request->input('Name');
         $newDirector= new Director();
         $newDirector->Name=$name;
         $newDirector->save();
         //return $this->index();
         return redirect("/admin/director");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Director= Director::find($id);
        return view("AdminViews.index",['page'=>'directorShow'],['Director'=>$Director]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idDirector= intval($id);
        $DirectorExist= Director::where('id',$idDirector)->first();
        return view('AdminViews.index',['page'=>"DirectorEdit"],[ 'Director'=>$DirectorExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $name= $request->input('Name');
         $newDirector= Director::where('id',$id)->first();
         $newDirector->Name=$name;
         $newDirector->save();
        //return $this->index();
        return redirect("/admin/director");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $newDirector= Director::where('id',$id)->first();
        $newDirector->Deleted=1;
        $newDirector->save();
       // return $this->index();
       return redirect("/admin/director");
    }
}

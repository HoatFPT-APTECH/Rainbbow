<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Photo;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPhoto= Photo::with('movies')->where('Deleted',0)->get();
        return view("AdminViews.index",['page'=>'photo'],['danhsach'=>$listPhoto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ListMovie= Movie::all();
        return view("AdminViews.index",['page'=>'photoCreate',"ListMovie"=>$ListMovie]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Src= $request->input('Src');
        $Movie= $request->input('Movie_Id');

         $newPhoto= new Photo();
         $newPhoto->Src=$Src;
         $newPhoto->Movie_Id=$Movie;

         $newPhoto->save();
         return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $Photo= Photo::find($id);
        return view("AdminViews.index",['page'=>'photoShow'],['Photo'=>$Photo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {    $ListMovie= Movie::all();

            $idPhoto= intval($id);
            $PhotoExist= Photo::where('Id',$idPhoto)->first();
        
            return view('AdminViews.index',['page'=>"photoEdit", 'Photo'=>$PhotoExist,"ListMovie"=>$ListMovie]);
    }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Src= $request->input('Src');
        $Movie= $request->input('Movie_Id');

        $newPhoto= Photo::where('Id',$id)->first();
             
        $newPhoto->Src=$Src;
        $newPhoto->Movie_Id=$Movie;

        $newPhoto->save();
        return redirect("/admin/photo");
        // return response()->json($newPhoto);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $newPhoto=Photo::where('Id',$id)->first();
        $newPhoto->Deleted=1;
        $newPhoto->save();
        return redirect('/admin/photo');
    }
}

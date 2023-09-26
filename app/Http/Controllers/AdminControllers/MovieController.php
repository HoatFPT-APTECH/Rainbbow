<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Director;
use App\Models\Productor;
use App\Models\Photo;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listMovie= Movie::with('movieCategory','director','productor')->get();
        return view("AdminViews.index",['page'=>'movie'],['danhsach'=>$listMovie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ListCategory= MovieCategory::all();
        $ListDirector= Director::all();
        $ListProductor= Productor::all();
        return view("AdminViews.index",[
            'page'=>'movieCreate',
        "ListCategory"=>$ListCategory,"ListDirector"=>$ListDirector,"ListProductor"=>$ListProductor]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Name= $request->input('Name');
        $DateShow= $request-> input('date');
        $VideoTrailer=$request->input('trailer');
        $Price= $request->input('price');
        $Description= $request->input('description');
        $Category= $request->input('MovieCategory_Id');
        $Director=$request->input('Director_Id');
        $Productor=$request->input('Productor_Id');

         $newMovie= new Movie();
         $newMovie->Name=$Name;
         $newMovie->DateShow=$DateShow;
         $newMovie->VideoTrailer=$VideoTrailer;
         $newMovie->Price=$Price;
         $newMovie->Description=$Description;
         $newMovie->MovieCategory_Id=$Category;
         $newMovie->Director_Id=$Director;
         $newMovie->Productor_Id=$Productor;

         $newMovie->save();
         return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $idMovie= intval($id);
        $listPhoto= Photo::where('Movie_Id', $idMovie)->get();
        $Movie= Movie::find($id);
        return view("AdminViews.index",['page'=>'movieShow'],['Movie'=>$Movie],['danhsach'=>$listPhoto]);
        // return response()->json($listPhoto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {$ListCategory= MovieCategory::all();
            $ListDirector= Director::all();
            $ListProductor= Productor::all();
            $idMovie= intval($id);
            $MovieExist= Movie::where('Id',$idMovie)->first();
            return view('AdminViews.index',['page'=>"movieEdit", 'Movie'=>$MovieExist,"ListCategory"=>$ListCategory,"ListDirector"=>$ListDirector,"ListProductor"=>$ListProductor]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
            $Name= $request->input('Name');
            $DateShow= $request-> input('date');
        $VideoTrailer=$request->input('trailer');
        $Price= $request->input('price');
        $Description= $request->input('description');
        $Category= $request->input('MovieCategory_Id');
        $Director=$request->input('Director_Id');
        $Productor=$request->input('Productor_Id');

            $newMovie= Movie::where('Id',$id)->first();
             
            $newMovie->DateShow=$DateShow;
         $newMovie->VideoTrailer=$VideoTrailer;
         $newMovie->Price=$Price;
         $newMovie->Description=$Description;
         $newMovie->MovieCategory_Id=$Category;
         $newMovie->Director_Id=$Director;
         $newMovie->Productor_Id=$Productor;
           $newMovie->save();
           return redirect("/admin/movie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
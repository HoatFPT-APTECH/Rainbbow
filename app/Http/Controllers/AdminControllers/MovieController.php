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
       
        $listMovie= Movie::with('movieCategory','director','productor','photos')->where('Deleted',0)->get();
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
        $Srcmain= $request->input('Srcmain');
        $Src1= $request->input('Src1');
        $Src2= $request->input('Src2');
        $Src3= $request->input('Src3');
        $Src4= $request->input('Src4');
        $Src5= $request->input('Src5');

         $newMovie= new Movie();
         $newMovie->Name=$Name;
         $newMovie->DateShow=$DateShow;
         $newMovie->VideoTrailer=$VideoTrailer;
         $newMovie->Price=$Price;
         $newMovie->Description=$Description;
         $newMovie->MovieCategory_Id=$Category;
         $newMovie->Director_Id=$Director;
         $newMovie->Productor_Id=$Productor;
         $newMovieRs= $newMovie->save();

         $newPhotoMain= new Photo();
         $newPhotoMain->Src= $Srcmain;
         $newPhotoMain->Movie_Id=$newMovie->Id;

         $newPhoto1= new Photo();
         $newPhoto1->Src = $Src1;
         $newPhoto1->Movie_Id=$newMovie->Id;

         $newPhoto2= new Photo();
         $newPhoto2->Src= $Src2;
         $newPhoto2->Movie_Id=$newMovie->Id;

         $newPhoto3= new Photo();
         $newPhoto3->Src= $Src3;
         $newPhoto3->Movie_Id=$newMovie->Id;

         $newPhoto4= new Photo();
         $newPhoto4->Src= $Src4;
         $newPhoto4->Movie_Id=$newMovie->Id;

         $newPhoto5= new Photo();
         $newPhoto5->Src= $Src5;
         $newPhoto5->Movie_Id=$newMovie->Id;

         
         $newPhotoMain->save();
         $newPhoto1->save();
         $newPhoto2->save();
         $newPhoto3->save();
         $newPhoto4->save();
         $newPhoto5->save();
         return $this->index();
        // return response()->json($newMovie->Id);
        
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
            //   return response()->json($listPhoto);
        return view("AdminViews.index",[
            'Movie'=>$Movie,
            'danhsach'=>$listPhoto,
            'page'=>'movieShow']);
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
        $newMovie= Movie::where('Id',$id)->first();
        $newMovie->Deleted=1;
        $newMovie->save();
        return redirect("/admin/movie");
    }
}

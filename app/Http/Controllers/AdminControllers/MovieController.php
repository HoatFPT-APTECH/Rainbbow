<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\MovieCategory;
use App\Models\Director;
use App\Models\Productor;
use App\Models\Photo;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $listMovie = Movie::with('movieCategory', 'director', 'productor', 'photos')->where('Deleted', 0)
        ->orderBy('DateShow','desc')
        ->get();
        return view("AdminViews.index", ['page' => 'movie'], ['danhsach' => $listMovie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ListCategory = MovieCategory::all();
        $ListDirector = Director::all();
        $ListProductor = Productor::all();
        return view("AdminViews.index", [
            'page' => 'movieCreate',
            "ListCategory" => $ListCategory, "ListDirector" => $ListDirector, "ListProductor" => $ListProductor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function convertPathUpLoad($str)
    {

        $listStr = explode("/", $str);
        array_shift($listStr);
        $realPath = implode("/", $listStr);
        return url("storage/" . $realPath);
    }
    public function store(Request $request)
    {
        $Name = $request->input('Name');
        $DateShow = $request->input('date');
        $VideoTrailer = $request->input('trailer');
        $Price = $request->input('price');
        $Description = $request->input('description');
        $Category = $request->input('MovieCategory_Id');
        $Director = $request->input('Director_Id');
        $Productor = $request->input('Productor_Id');
        $newMovie = new Movie();
        $newMovie->Name = $Name;
        $newMovie->DateShow = $DateShow;
        $newMovie->VideoTrailer = $VideoTrailer;
        $newMovie->Price = $Price;
        $newMovie->Description = $Description;
        $newMovie->MovieCategory_Id = $Category;
        $newMovie->Director_Id = $Director;
        $newMovie->Productor_Id = $Productor;
        $newMovie->save();


        $fileSrc = $request->file('Srcmain');
        $pathSrc =  $fileSrc->store('public/movie_single');
        $realPathSrcMain = $this->convertPathUpLoad($pathSrc);
      
        $newPhotoMain = new Photo();
        $newPhotoMain->Src = $realPathSrcMain;
        $newPhotoMain->Movie_Id = $newMovie->Id;
         $newPhotoMain->save();
        for ($i = 1; $i <= 5; $i++) {
            $fieldName = 'Src' . $i;

            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $path = $file->store('public/movie_single');
                $realPath = $this->convertPathUpLoad($path);
                $newPhoto1 = new Photo();
                $newPhoto1->Src = $realPath;
                $newPhoto1->Movie_Id = $newMovie->Id;
                $newPhoto1->save();
            }
        }

        return redirect('/admin/movie');
        // return response()->json($newMovie->Id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $idMovie = intval($id);
        $listPhoto = Photo::where('Movie_Id', $idMovie)->get();
        $Movie = Movie::find($id);
        //   return response()->json($listPhoto);
        return view("AdminViews.index", [
            'Movie' => $Movie,
            'danhsach' => $listPhoto,
            'page' => 'movieShow'
        ]);
        // return response()->json($listPhoto);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { {
            $ListCategory = MovieCategory::all();
            $ListDirector = Director::all();
            $ListProductor = Productor::all();
            $idMovie = intval($id);
            $MovieExist = Movie::where('Id', $idMovie)->first();
            return view('AdminViews.index', [
                'page' => "movieEdit", 
                "JsPage"=>'edit_movie',
                'Movie' => $MovieExist, 
                "ListCategory" => $ListCategory, 
                "ListDirector" => $ListDirector,
                 "ListProductor" => $ListProductor]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $DateShow = $request->input('date');
        $VideoTrailer = $request->input('trailer');
        $Price = $request->input('price');
        $Description = $request->input('description');
        $Category = $request->input('MovieCategory_Id');
        $Director = $request->input('Director_Id');
        $Productor = $request->input('Productor_Id');

        $newMovie = Movie::where('Id', $id)->first();

        $newMovie->DateShow = $DateShow;
        $newMovie->VideoTrailer = $VideoTrailer;
        $newMovie->Price = $Price;
        $newMovie->Description = $Description;
        $newMovie->MovieCategory_Id = $Category;
        $newMovie->Director_Id = $Director;
        $newMovie->Productor_Id = $Productor;
        $newMovie->save();
        $photos = Photo::where('Movie_Id', $id)->get();

        if ($request->hasFile('Srcmain')) {
            $fileSrc = $request->file('Srcmain');
            $pathSrc =  $fileSrc->store('public/movie_single');
            $realPathSrcMain = $this->convertPathUpLoad($pathSrc);
            $Srcmain = $realPathSrcMain;

            // $newPhotoMain =Photo::find($photos[0]->Id) ;

            // $newPhotoMain->Src = $Srcmain;
            // $newPhotoMain->save();


            DB::table('tbl_photo')->where('Id', $photos[0]->Id)->update(['Src' => $Srcmain]);
        }





        // return response()->json($newPhotoMain);


        for ($i = 1; $i <= 5; $i++) {
            $fieldName = 'Src' . $i;

            if ($request->hasFile($fieldName)) {
                $file = $request->file($fieldName);
                $path = $file->store('public/movie_single');
                $realPath = $this->convertPathUpLoad($path);


                DB::table('tbl_photo')->where('Id', $photos[$i]->Id)->update(['Src' => $realPath]);
            }
        }


        return redirect("/admin/movie");
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newMovie = Movie::where('Id', $id)->first();
        $newMovie->Deleted = 1;
        $newMovie->save();
        return redirect("/admin/movie");
    }
}

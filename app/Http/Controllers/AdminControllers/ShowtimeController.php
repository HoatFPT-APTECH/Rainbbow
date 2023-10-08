<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Showtime;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listShowtime= Showtime::all();
       //return view('AdminViews.index',['page'=>"showtime",'danhsach'=>$listShowtime]);
        return response()->json($listShowtime,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"showtimeCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Start= $request->input('Start');
        $End= $request->input('End');
        $Movie_Id= $request->input('Movie_Id');
        $Cinema_Id= $request->input('Cinema_Id');
        $Room_id= $request->input('Room_id');

         $newShowtime= new Showtime();
         $newShowtime->Start=$Start;
         $newShowtime->End=$End;
         $newShowtime->Movie_Id=$Movie_Id;
         $newShowtime->Cinema_Id=$Cinema_Id;
         $newShowtime->Room_id=$Room_id;
         $newShowtime->save();
         //return $this->index();
         return redirect("/admin/showtime");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Showtime= Showtime::find($id);
        return view("AdminViews.index",['page'=>'showtimeShow'],['Showtime'=>$Showtime]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idShowtime= intval($id);
        $ShowtimeExist= Showtime::where('id',$idShowtime)->first();
        return view('AdminViews.index',['page'=>"showtimeEdit", 'Showtime'=>$ShowtimeExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Start= $request->input('Start');
        $End= $request->input('End');
        $Movie_Id= $request->input('Movie_Id');
        $Cinema_Id= $request->input('Cinema_Id');
        $Room_id= $request->input('Room_id');

        $newShowtime= Showtime::where('id',$id)->first();
         $newShowtime->Start=$Start;
         $newShowtime->End=$End;
         $newShowtime->Movie_Id=$Movie_Id;
         $newShowtime->Cinema_Id=$Cinema_Id;
         $newShowtime->Room_id=$Room_id;
         $newShowtime->save();
         //return $this->index();
         return redirect("/admin/showtime");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newShowtime= Showtime::where('id',$id)->first();
        $newShowtime->delete();
       // return $this->index();
       return redirect("/admin/showtime");
    }
}

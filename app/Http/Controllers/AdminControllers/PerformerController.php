<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Performer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPerformer= Performer::all();
         return view('AdminViews.index',['page'=>"performer",'danhsach'=>$listPerformer]);
         //return response()->json($listPerformer,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"performerCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $name= $request->input('Name');
         $newPerformer= new Performer();
         $newPerformer->Name=$name;
         $newPerformer->save();
         //return $this->index();
         return redirect("/admin/performer");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Performer= Performer::find($id);
        return view("AdminViews.index",['page'=>'performerShow'],['Performer'=>$Performer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idPerformer= intval($id);
        $PerformerExist= Performer::where('id',$idPerformer)->first();
        return view('AdminViews.index',['page'=>"performerEdit", 'Performer'=>$PerformerExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $name= $request->input('Name');
         $newPerformer= Performer::where('id',$id)->first();
         $newPerformer->Name=$name;
        $newPerformer->save();
        //return $this->index();
        return redirect("/admin/performer");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $newPerformer= Performer::where('id',$id)->first();
        $newPerformer->delete();
       // return $this->index();
       return redirect("/admin/performer");
    }
}

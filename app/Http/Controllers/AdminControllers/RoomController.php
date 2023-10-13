<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Room;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRoom= Room::where('Deleted',0)->get();
        return view('AdminViews.index',['page'=>"room",'danhsach'=>$listRoom]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"roomCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Name= $request->input('Name');
        $newRoom= new Room();
        $newRoom->Name=$Name;
        $newRoom->save();
        //return $this->index();
        return redirect("/admin/room");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Room= Room::find($id);
        return view("AdminViews.index",['page'=>'roomShow'],['Room'=>$Room]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idRoom= intval($id);
        $RoomExist= Room::where('id',$idRoom)->first();
        return view('AdminViews.index',['page'=>"roomEdit", 'Room'=>$RoomExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Name= $request->input('Name');
        $newRoom= Room::where('id',$id)->first();
        $newRoom->Name=$Name;
        $newRoom->save();
        //return $this->index();
        return redirect("/admin/room");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newRoom= Room::where('id',$id)->first();
        $newRoom->Deleted=1;
        $newRoom->save();
       // return $this->index();
       return redirect("/admin/room");
    }
}

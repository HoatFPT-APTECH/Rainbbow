<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRole= Role::where('Deleted',0)->get();
        return view('AdminViews.index',['page'=>"role",'danhsach'=>$listRole]);
        //return response()->json($listPerformer,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"roleCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Name= $request->input('Name');
        $newRole= new Role();
        $newRole->Name=$Name;
        $newRole->save();
        return redirect("/admin/role");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Role= Role::find($id);
        return view("AdminViews.index",['page'=>'roleShow'],['Role'=>$Role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idRole= intval($id);
        $RoleExist= Role::where('id',$idRole)->first();
        return view('AdminViews.index',['page'=>"roleEdit", 'Role'=>$RoleExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Name= $request->input('Name');
         $newRole= Role::where('id',$id)->first();
         $newRole->Name=$Name; 
        $newRole->save();
        return redirect("/admin/role");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newRole= Role::where('id',$id)->first();
        $newRole->Deleted=1;
        $newRole->save();
        //return $this->index();
        return redirect("/admin/role");
    }
}

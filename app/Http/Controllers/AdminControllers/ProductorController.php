<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Productor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProductor= Productor::all();
         return view('AdminViews.index',['page'=>"productor",'danhsach'=>$listProductor]);
         //return response()->json($listPerformer,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"ProductorCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $name= $request->input('Name');
         $newProductor= new Productor();
         $newProductor->Name=$name;
         $newProductor->save();
         //return $this->index();
         return redirect("/admin/productor");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Productor= Productor::find($id);
        return view("AdminViews.index",['page'=>'productorShow'],['Productor'=>$Productor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idProductor= intval($id);
        $ProductorExist= Productor::where('id',$idProductor)->first();
        return view('AdminViews.index',['page'=>"ProductorEdit"],[ 'Productor'=>$ProductorExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $name= $request->input('Name');
         $newProductor= Productor::where('id',$id)->first();
         $newProductor->Name=$name;
        $newProductor->save();
        //return $this->index();
        return redirect("/admin/productor");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $newProductor= Productor::where('id',$id)->first();
        $newProductor->delete();
       // return $this->index();
       return redirect("/admin/productor");
    }
}

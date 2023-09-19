<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{


    public function index()
    {
        $listproductor = Productor::all();
        return view('AdminViews.index', ['page' =>'productor','danhsach'=> $listproductor]);
        //return response()->json($listProductor,200);

    }
    public function show(string $id){
        $Productor= Productor::find($id);
        return view("AdminView.index",['page'=>'productorShow'],['Productor'=>$Productor]);

    }
    public function create()
    {
        return view('AdminViews.index',['page'=>"ProductorCreate"]);
    }
    public function store(Request $request){
       
        $name=$request ->input('Name');
        $newProductor= new Productor();
        $newProductor->Name=$name;
        $newProductor->save();
    return $this->index();
    }
    public function edit(string $id){
        $idProductor=intval($id);
        $ProductorExist=Productor::where('id',$idProductor)->first();
        return view('AdminViews.index',['page'=>"ProductorEdit", 'Productor'=>$ProductorExist]);

    }
    public function update(Request $request, string $id){
        $name=$request->input('name');
        $newProductor=Productor::where('id',$id)->first();
        $newProductor->name=$name;
        $newProductor->save();
        return $this->index();
    }
    public function destroy(string $id){
        $newProductor= Productor::where('id',$id)->first();
        $newProductor->delete();
        return $this->index();
    }
}
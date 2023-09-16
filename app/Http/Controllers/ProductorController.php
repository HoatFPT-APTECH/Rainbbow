<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Productor;
use Illuminate\Http\Request;

class ProductorController extends Controller
{


    public function index()
    {
        $listproductor = Productor::all();
        return view('AdminViews.index', ['page' =>'productor','danh sach'=> $listproductor]);
        //return response()->json($listProductor,200);

    }
    public function show(string $id){

    }
    public function create()
    {
        return view('AdminViews.index',['page'=>"performerCreate"]);
    }
    public function store(Request $request){
        $id=$request ->input('id');
        $name=$request ->input('name');
        $newProductor= new Productor();
        $newProductor->id=$id;
        $newProductor->save();
    return $this->index();
    }
    public function update(Request $request, string $id){
        $name=$request->input('name');
        $newProductor=Productor::where('id',$id)->get();
        $newProductor->name=$name;
        Productor::Where('id',$id)->update(['name'=>$name]);
        return $this->index();
    }
    public function destroy(string $id){}
}

<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use App\Models\Productor;
use Illuminate\Http\Request;
use App\Models\Director;

class DirectorController extends Controller{
        public function index(){
        $listdirector=Director::all();
        return view('AdminViews.index',['page'=>'director','danhsach'=>$listdirector]);
        }
        public function show(string $id){
            $Director = Director::find($id);
            return view("AdminView.index",['page'=>'directorShow'],['Director'=>$Director]);


        }
        public function create(){
            return view('AdminViews.index',['page'=>"DirectorCreate"]);
        }
        public function store(Request $request){
            $name=$request->input('Name');
            $newDirector= new Director();
            $newDirector->Name=$name;
            $newDirector->save();
            return $this->index();

        }
        public function edit(string $id){
            $idDirector=intval($id);
            $DirectorExist=Director::where('id',$idDirector)->first();
            return view('AdminViews.index',['page'=>"DirectorEdit",'Director'=>$DirectorExist]);

        }
        public function update(Request $request, string $id){
            $name=$request->input('name');
            $newDirector=Director::where('id',$id)->first();
            $newDirector->name=$name;
            $newDirector->save();
            return $this->index();
        }
        public function destroy(string $id){
            $newDirector=Director::where('id',$id)->first();
            $newDirector->delete();
            return $this->index();
        }
    }


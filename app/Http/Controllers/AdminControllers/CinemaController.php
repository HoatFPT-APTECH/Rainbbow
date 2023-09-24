<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller{
        public function index(){
        $listcinema=Cinema::all();
        return view('AdminViews.index',['page'=>'cinema','danhsach'=>$listcinema]);
        }
        public function show(string $id){
            $Cinema = Cinema::find($id);
            return view("AdminView.index",['page'=>'cinemaShow'],['Cinema'=>$Cinema]);


        }
        public function create(){
            return view('AdminViews.index',['page'=>"CinemaCreate"]);
        }
        public function store(Request $request){
            $name=$request->input('Name');
            $newCinema= new Cinema();
            $newCinema->Name=$name;
            $newCinema->save();
            return $this->index();

        }
        public function edit(string $id){
            $idCinema=intval($id);
            $CinemaExist=Cinema::where('id',$idCinema)->first();
            return view('AdminViews.index',['page'=>"CinemaEdit",'Cinema'=>$CinemaExist]);

        }
        public function update(Request $request, string $id){
            $name=$request->input('name');
            $newCinema=Cinema::where('id',$id)->first();
            $newCinema->name=$name;
            $newCinema->save();
            return $this->index();
        }
        public function destroy(string $id){
            $newCinema=Cinema::where('id',$id)->first();
            $newCinema->delete();
            return $this->index();
        }
    }


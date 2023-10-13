<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cinema;

class CinemaController extends Controller{
    // Trang view hiển thị bảng
        public function index(){
        $listcinema=Cinema::where('Deleted',0)->get();
        return view('AdminViews.index',['page'=>'cinema','danhsach'=>$listcinema]);
        }
        // action trả về trang hiển thị chi tiết một bản ghi như thế nào 
        public function show(string $id){
            $Cinema = Cinema::find($id);
            return view("AdminViews.index",['page'=>'CinemaShow'],['Cinema'=>$Cinema]);


        }
        // action trả về trang mà nó sẽ cho phpép nugời dùng thêm một đối tương. Đối tượng ở đây thì làm cinema
        public function create(){
            return view('AdminViews.index',['page'=>"CinemaCreate"]);
        }
        // gửi dữ liệu của đối tượng sau khi nhập vào form vào đây, hàm ,này sẽ làm việc với csdl để thêm object và trả về index, và nhớ là dùng rediẻct("/ dương link tính từ local mà trỏ đến trang hiển thị bảng của đối utơngj quản lý"/)
        public function store(Request $request){
            $name=$request->input('inputName');
            $address=$request->input("addressInput");
            $newCinema= new Cinema();
            $newCinema->Name=$name;
            $newCinema->Address=$address;
            $newCinema->save();
            return redirect('/admin/cinema');

        }
        // show cái trang mà cho  phép người dùng sửa một đối tượng với dữ liệu cũ được hiển thị lên 
        public function edit(string $id){
            $idCinema=intval($id);
            $CinemaExist=Cinema::where('id',$idCinema)->first();
            return view('AdminViews.index',['page'=>"CinemaEdit",'Cinema'=>$CinemaExist]);

        }
        // action sẽ làm việc với csdl và thêm object vào scdl và cũng sẽ điều hướng trình duiyệt người ugnf về cái url hiển thị bảng của object qua redirect
        public function update(Request $request, string $id){
            $name=$request->input('name');
            $address=$request->input('Address');
            $newCinema=Cinema::where('id',$id)->first();
            $newCinema->Address=$address;
            $newCinema->name=$name;
            $newCinema->save();
            return redirect('/admin/cinema');
        }
        // thk này sẽ làm việc với scdl để xoá object
        public function destroy(string $id){
            $newCinema=Cinema::where('id',$id)->first();
            $newCinema->Deleted=1;
            $newCinema->save();
            return redirect('/admin/cinema');
        }
    }


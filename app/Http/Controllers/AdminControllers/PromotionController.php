<?php

namespace App\Http\Controllers\AdminControllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promotion;

class PromotionController extends Controller{
    // Trang view hiển thị bảng
        public function index(){
        $listpromotion=Promotion::all();
        return view('AdminViews.index',['page'=>'promotion','danhsach'=>$listpromotion]);
        }
        // action trả về trang hiển thị chi tiết một bản ghi như thế nào 
        public function show(string $id){
            $Promotion = Promotion::find($id);
            return view("AdminViews.index",['page'=>'promotionShow'],['Promotion'=>$Promotion]);


        }
        // action trả về trang mà nó sẽ cho phpép nugời dùng thêm một đối tương. Đối tượng ở đây thì làm cinema
        public function create(){
            return view('AdminViews.index',['page'=>"PromotionCreate"]);
        }
        // gửi dữ liệu của đối tượng sau khi nhập vào form vào đây, hàm ,này sẽ làm việc với csdl để thêm object và trả về index, và nhớ là dùng rediẻct("/ dương link tính từ local mà trỏ đến trang hiển thị bảng của đối utơngj quản lý"/)
        public function store(Request $request){
            $Start=$request->input('inputStart');
            $End=$request->input("endInput");
        
            $newPromotion= new Promotion();
            $newPromotion->Start=$Start;
            $newPromotion->End=$End;
            $newPromotion->save();
            return redirect('/admin/promotion');
        //    return response()->json($newPromotion);

        }
        // show cái trang mà cho  phép người dùng sửa một đối tượng với dữ liệu cũ được hiển thị lên 
        public function edit(string $id){
            $idPromotion=intval($id);
            $PromotionExist=Promotion::where('id',$idPromotion)->first();
            return view('AdminViews.index',['page'=>"PromotionEdit",'Promotion'=>$PromotionExist]);

        }
        // action sẽ làm việc với csdl và thêm object vào scdl và cũng sẽ điều hướng trình duiyệt người ugnf về cái url hiển thị bảng của object qua redirect
        public function update(Request $request, string $id){
            $Start=$request->input('start');
            $End=$request->input('end');
            $newPromotion=Promotion::where('id',$id)->first();
            $newPromotion->start=$Start;
            $newPromotion->end=$End;

            $newPromotion->save();
            return redirect('/admin/promotion');
        }
        // thk này sẽ làm việc với scdl để xoá object
        public function destroy(string $id){
            $newPromotion=Promotion::where('id',$id)->first();
            $newPromotion->delete();
            return redirect('/admin/promotion');
        }
    }


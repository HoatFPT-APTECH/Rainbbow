<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$listPromotion = Promotion ::all();
        // return view('AdminViews.index',['page'=>"promotion",'danhsach'=>$listPromotion]);
         //return response()->json($listPromotion,200); 
        $listPromotion= Promotion::with('promotionCategrory')->get();
             // return response()->json($listPromotion,200); 


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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return view('AdminViews.index',['page'=>"promotionCreate"]);
       $ListCategrory= PromotionCategrory::all();
        return view("AdminViews.index",[
            'page'=>'promotionCreate',
        "ListCategrory"=>$ListCategrory ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Start= $request->input('Start');
        $End= $request->input('End');
        $PromotionCategrory_Id= $request->input('PromotionCategrory_Id');
         $newPromotion= new Promotion();
         $newPromotion->Start=$Start;
         $newPromotion->End=$End;
         $newPromotion->PromotionCategrory_Id=$PromotionCategrory_Id;
         $newPromotion->save();
         //return $this->index();
         return redirect("/admin/promotion");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Promotion= Promotion::find($id);
        return view("AdminViews.index",['page'=>'promotionShow'],['Promotion'=>$Promotion]);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       // $idPromotion= intval($id);
        //$PromotionExist= Promotion::where('id',$idPromotion)->first();
       // return view('AdminViews.index',['page'=>"promotionEdit", 'Promotion'=>$PromotionExist]);
       
        $ListCategrory= PromotionCategrory::all();
        $idPromotion= intval($id);
        $PromotionExist= Promotion::where('Id',$idPromotion)->first();
        return view('AdminViews.index',['page'=>"promotionEdit", 'Promotion'=>$PromotionExist,"ListCategrory"=>$ListCategrory]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Start= $request->input('Start');
        $End= $request->input('End');
        $PromotionCategrory_Id= $request->input('PromotionCategrory_Id');

         $newPromotion= Promotion::where('id',$id)->first();

         $newPromotion->Start=$Start;
         $newPromotion->End=$End;
         $newPromotion->PromotionCategrory_Id=$PromotionCategrory_Id;
         $newPromotion->save();
         //return $this->index();
         return redirect("/admin/promotion");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newPromotion= Promotion::where('id',$id)->first();
        $newPromotion->delete();
       // return $this->index();
       return redirect("/admin/promotion");
    }
}

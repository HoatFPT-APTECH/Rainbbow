<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Http\Controllers\Controller;
use App\Models\User;
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
        $listPromotion= Promotion::with(['promotionCategory','user'])->get();
      
        
             return view("AdminViews.index",[
                'page'=>'promotion',
            "danhsach"=>$listPromotion ]);
            // return response()->json([
            //          'page'=>'promotion',
            //      "danhsach"=>$listPromotion ]);

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

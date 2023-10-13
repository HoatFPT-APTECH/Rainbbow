<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\PromotionCategrory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionCategroryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPromotionCategrory= PromotionCategrory::where('Deleted',0)->get();
       return view('AdminViews.index',['page'=>"promotionCategrory ",'danhsach'=>$listPromotionCategrory]);
        //return response()->json($listPromotionCategrory,200);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"promotionCategroryCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Name= $request->input('Name');
        $Coefficient= $request->input('Coefficient');

         $newPromotionCategrory= new PromotionCategrory();

         $newPromotionCategrory->Name=$Name;
         $newPromotionCategrory->Coefficient=$Coefficient;
         $newPromotionCategrory->save();
         //return $this->index();
         return redirect("/admin/promotionCategrory");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idPromotionCategrory= intval($id);
        $PromotionCategroryExist= PromotionCategrory::where('id',$idPromotionCategrory)->first();
        return view('AdminViews.index',['page'=>"promotionCategroryEdit"],[ 'PromotionCategrory'=>$PromotionCategroryExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Name= $request->input('Name');
        $Coefficient= $request->input('Coefficient');
         $newPromotionCategrory= PromotionCategrory::where('id',$id)->first();
         $newPromotionCategrory->Name=$Name;
         $newPromotionCategrory->Coefficient=$Coefficient;
        $newPromotionCategrory->save();
        //return $this->index();
        return redirect("/admin/promotionCategrory");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newPromotionCategrory= PromotionCategrory::where('id',$id)->first();
        $newPromotionCategrory->Deleted=1;
         $newPromotionCategrory->save();
       // return $this->index();
       return redirect("/admin/promotionCategrory");
    }

}
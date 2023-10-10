<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Http\Controllers\Controller;
use App\Mail\VoucherCodeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $listPromotion= Promotion::with(['promotionCategory','user'])->where('Deleted',0)->get();
      
        
             return view("AdminViews.index",[
                'page'=>'promotion',
               
            "danhsach"=>$listPromotion ]);
            

        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // return view('AdminViews.index',['page'=>"promotionCreate"]);
       $ListCategrory= PromotionCategrory::all();
       $users=User::all();


        return view("AdminViews.index",[
            'page'=>'promotionCreate',
            'users'=>$users,
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
        $userId=$request->input('userId');

         $newPromotion= new Promotion();
         $newPromotion->Start=$Start;
         $newPromotion->End=$End;
         $newPromotion->PromotionCategrory_Id=$PromotionCategrory_Id;
         $newPromotion->User_Id=$userId;
         $newPromotion->save();

         $u=User::find($userId);
         $promotionCategory= PromotionCategrory::find($PromotionCategrory_Id);
         Mail::to($u->UserName)->send(new VoucherCodeMail($u,$newPromotion,$promotionCategory));
         //return $this->index();
         return redirect("/admin/promotion");
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
        $PromotionExist= Promotion::with(['promotionCategory','user'])->where('Id',$idPromotion)->first();
        $PromotionExist->User=User::find($PromotionExist->User_Id);
        $users=User::all();
        return view('AdminViews.index',[
            'page'=>"promotionEdit",
             'Promotion'=>$PromotionExist,
             "ListCategrory"=>$ListCategrory,
              "users"=>$users
            ]);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Start= $request->input('Start');
        $End= $request->input('End');
        $PromotionCategrory_Id= $request->input('PromotionCategrory_Id');
        $userId= $request->input('userId');

         $newPromotion= Promotion::where('Id',$id)->first();

         $newPromotion->Start=$Start;
         $newPromotion->End=$End;
         $newPromotion->PromotionCategrory_Id=$PromotionCategrory_Id;
         $newPromotion->User_Id=$userId;

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
        $newPromotion->Deleted=1;
        $newPromotion->save();
       // return $this->index();
       return redirect("/admin/promotion");
    }
}

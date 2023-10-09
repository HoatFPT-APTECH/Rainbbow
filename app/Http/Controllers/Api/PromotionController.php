<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Models\PromotionCniema;
use App\Models\PromotionUser;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function check(Request $request){
        $userId= $request->input('userId');
        $promotionId=$request->input('promotionId');
        $existPromotion=Promotion::with(["promotionCategory"])->where('User_Id',$promotionId)
        ->where("Id",$promotionId)
        ->first();
        if($existPromotion==null){
            return  response()->json(["message"=>"Not found"],404);
        }else{
            
            return response()->json($existPromotion,200);
    }
    }
}

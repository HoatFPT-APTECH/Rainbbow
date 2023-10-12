<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\VoucherCodeMail;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AutoSendMailController extends Controller
{
    //
     //
     public function index(){
        $users = User::whereDay('DateOfBirth', now()->day)
        ->whereMonth('DateOfBirth', now()->month)->where("Role_Id", '>', 2)
        ->get();
    $promotionCategoryId = 3;
    $promotionCategory=PromotionCategrory::find($promotionCategoryId);
    foreach ($users as $u) {
         if($this->checkPromotionExisted($u))continue;
        $promotion = new Promotion();
        $promotion->Start = now();
        $promotion->End = null;
        $promotion->User_Id = $u->Id; // Thay thế bằng User_Id thực tế
        $promotion->PromotionCategrory_Id = $promotionCategoryId; // Thay thế bằng PromotionCategory_Id thực tế
        $promotion->Used = 0;
        $promotion->Deleted = 0;
        $promotion->save();
       
        Mail::to($u->UserName)->send(new VoucherCodeMail($u,$promotion,$promotionCategory));
    }
      return response()->json('success',200);
    }
    public function checkPromotionExisted($u){
        $existedPromotion= Promotion::whereDay("Created",now()->day)
        ->whereMonth('Created',now()->month)-> where('User_Id',$u->Id)->first();
       if($existedPromotion)return true;
       else return false;
    }
}

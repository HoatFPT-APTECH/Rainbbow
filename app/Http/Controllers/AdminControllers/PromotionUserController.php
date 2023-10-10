<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Mail\VoucherCodeMail;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PromotionUserController extends Controller
{
    //
    public function index(Request $request)
    {
        $sendMail=$request->session()->get('sendMail');
        $users = User::whereDay('DateOfBirth', now()->day)
            ->whereMonth('DateOfBirth', now()->month)->where("Role_Id", '>', 2)
            ->get();
        $promotionCategorys = PromotionCategrory::all();
        // return response()->json($users);
        return  view("AdminViews.index", [
            'page' => 'promotionUser',
            'sendMail'=>$sendMail,
            'category' => $promotionCategorys,
            "danhsach" => $users
        ]);
    }
    
    public function sendMail(Request $request)
    {
        $users = User::whereDay('DateOfBirth', now()->day)
            ->whereMonth('DateOfBirth', now()->month)->where("Role_Id", '>', 2)
            ->get();
        $promotionCategoryId = $request->input('promotionCategoryId');
        $promotionCategory=PromotionCategrory::find($promotionCategoryId);
        foreach ($users as $u) {
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
        // return response()->json('success');
        return redirect('/admin/promotionUser')->with([
            'sendMail'=>true
        ]);
    }
}

<?php

namespace App\Console\Commands;

use App\Mail\VoucherCodeMail;
use App\Models\Promotion;
use App\Models\PromotionCategrory;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CheckBirthDaysCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-birth-days-command';
    

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $today=now();
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
   

    }
    
    public function checkPromotionExisted($u){
        $existedPromotion= Promotion::whereDay("Created",now()->day)
        ->whereMonth('Created',now()->month)-> where('User_Id',$u->Id)->first();
       if($existedPromotion)return true;
       else return false;
    }
}

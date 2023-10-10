<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Models\Cinema;
use App\Models\Movie;
use App\Models\Room;
use App\Models\Showtime;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listBooking= Booking ::with(['user','tickets'])->get();
      for($b=0;$b<sizeof($listBooking);$b++){
        for($t=0;$t<sizeof($listBooking[$b]->tickets);$t++){
                $listBooking[$b]->tickets[$t]->Showtime= Showtime::where("Id",$listBooking[$b]->tickets[$t]->Showtime_Id)->first();
                $listBooking[$b]->tickets[$t]->Showtime->Movie=Movie::where("Id",$listBooking[$b]->tickets[$t]->Showtime->Movie_Id)->first(); 
                $listBooking[$b]->tickets[$t]->Showtime->Cinema=Cinema::where("Id",$listBooking[$b]->tickets[$t]->Showtime->Cinema_Id)->first();
                $listBooking[$b]->tickets[$t]->Showtime->Room= Room::where("Id",$listBooking[$b]->tickets[$t]->Showtime->Room_id)->first();
        }
      }

       return view('AdminViews.index',['page'=>"booking",'danhsach'=>$listBooking]);
       // return response()->json($listBooking,200); 
    }
    public function Search(Request $request){
        $key=$request->input('key');
        $listBooking= Booking::with(['user', 'tickets'])
        ->whereHas('user', function ($query) use ($key) {
            $query->where('Phone', 'like', '%' . $key . '%');
        })
        ->get();
    
        for($b=0;$b<sizeof($listBooking);$b++){
            for($t=0;$t<sizeof($listBooking[$b]->tickets);$t++){
                    $listBooking[$b]->tickets[$t]->Showtime= Showtime::where("Id",$listBooking[$b]->tickets[$t]->Showtime_Id)->first();
                    $listBooking[$b]->tickets[$t]->Showtime->Movie=Movie::where("Id",$listBooking[$b]->tickets[$t]->Showtime->Movie_Id)->first(); 
                    $listBooking[$b]->tickets[$t]->Showtime->Cinema=Cinema::where("Id",$listBooking[$b]->tickets[$t]->Showtime->Cinema_Id)->first();
                    $listBooking[$b]->tickets[$t]->Showtime->Room= Room::where("Id",$listBooking[$b]->tickets[$t]->Showtime->Room_id)->first();
            }
          }
         return view('AdminViews.index',['page'=>"booking",'danhsach'=>$listBooking]);
         
       }
       public function updateStatus(Request $request)
       {
           $ticket_id = $request->input('ticket_id');
           $status = $request->input('status');
   
           $ticket = Ticket::find($ticket_id);
           $ticket->Status = $status;
           $ticket->save();
        //  return response()->json($ticket);
       
           return redirect("/admin/booking");
       }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"bookingCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $User_Id= $request->input('User_Id');
        $OrderTime= $request->input('OrderTime');
        $AllPrice= $request->input('AllPrice');
        $newBooking= new Booking();
        $newBooking->User_Id=$User_Id;
        $newBooking->OrderTime=$OrderTime;
        $newBooking->AllPrice=$AllPrice;
        
        $newBooking->save();
        //return $this->index();
        return redirect("/admin/booking");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Booking= Booking::find($id);
        return view("AdminViews.index",['page'=>'bookingShow'],['Booking'=>$Booking]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idBooking= intval($id);
        $BookingExist= Booking::where('id',$idBooking)->first();
        return view('AdminViews.index',['page'=>"bookingEdit", 'Booking'=>$BookingExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $User_Id= $request->input('User_Id');
        $OrderTime= $request->input('OrderTime');
        $AllPrice= $request->input('AllPrice');

        $newBooking= Booking::where('id',$id)->first();
        $newBooking->User_Id=$User_Id;
        $newBooking->OrderTime=$OrderTime;
        $newBooking->AllPrice=$AllPrice;
        
        $newBooking->save();
        //return $this->index();
        return redirect("/admin/booking");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newBooking= Booking::where('id',$id)->first();
        $newBooking->delete();
       // return $this->index();
       return redirect("/admin/booking");
    }
}

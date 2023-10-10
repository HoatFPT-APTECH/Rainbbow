<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Ticket;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Room;
use App\Models\Showtime;
use App\Models\Seat;
use App\Models\Booking;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listTicket= Ticket::with('showtime','booking','seat')->where('Deleted',0)->get();
        foreach ($listTicket as $ticket) {
            $movie = $ticket->showtime->movie->Name;
            $cinema = $ticket->showtime->cinema->Name;
            $room = $ticket->showtime->room->Name;
            $userName= $ticket->booking->user->Name;

          }
    return view('AdminViews.index',['page'=>"ticket",'danhsach'=>$listTicket]);
    //return response()->json($listTicket,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $ListMovie= Movie::all();
        $ListCinema= Cinema::all();
        $ListRoom= Room::all();
        return view('AdminViews.index',['page'=>"ticketCreate",
        'listMovie'=>$ListMovie,
        'listCinema'=>$ListCinema,
        'listRoom'=>$ListRoom
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Price= $request->input('Price');
        $Name= $request->input('Name');
        $Phone= $request->input('Phone');
        $Movie= $request->input('Movie_Id');
        $Cinema= $request->input('Cinema_Id');
        $Room= $request->input('Room_Id');
        $Seat= $request->input('Seat');

        $newTicket= new Ticket();
        $newShowTime= new Showtime();
        $newUser= new User();
        $newBooking= new Booking();
        $newSeat= new Seat();

        

       
        $newShowTime->Movie_Id= $Movie;
        $newShowTime->Cinema_Id= $Cinema;
        $newShowTime->Room_id= $Room;

        $newShowTimeRs= $newShowTime->save();

        $newUser->Name= $Name;
        $newUser->Phone= $Phone;

        $newUserRs = $newUser->save();

        $newSeat->Name= $Seat;

        $newSeatRs= $newSeat->save();

        $newBooking->User_Id= $newUser->Id;
        $newBookingRs= $newBooking->save();

        $newTicket->Price=$Price;
        $newTicket->Showtime_Id= $newShowTime->Id;
        $newTicket->Booking_Id= $newBooking->Id;
        $newTicket->Seat_Id= $newSeat->Id;
        // $newTicket->Showtime_Id=$Showtime_Id;
        // $newTicket->Booking_Id=$Booking_Id;
        // $newTicket->Seat_Id=$Seat_Id;
        // $newTicket->Status=$Status;

        $newTicket->save();
        
        
        
        //return $this->index();
        return redirect("/admin/ticket");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Ticket= Ticket::find($id);
        return view("AdminViews.index",['page'=>'ticketShow'],['Ticket'=>$Ticket]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $idTicket= intval($id);
        $TicketExist= Ticket::where('id',$idTicket)->first();
        return view('AdminViews.index',['page'=>"ticketEdit", 'Ticket'=>$TicketExist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Price= $request->input('Price');
        $Showtime_Id= $request->input('Showtime_Id');
        $Booking_Id= $request->input('Booking_Id');
        $Seat_Id= $request->input('Seat_Id');
        $Status= $request->input('Status');

         $newTicket= Ticket::where('id',$id)->first();
         $newTicket->Price=$Price;
         $newTicket->Showtime_Id=$Showtime_Id;
         $newTicket->Booking_Id=$Booking_Id;
         $newTicket->Seat_Id=$Seat_Id;
         $newTicket->Status=$Status;
 
         $newTicket->save();
         //return $this->index();
         return redirect("/admin/ticket");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $newTicket= Ticket::where('id',$id)->first();
        $newTicket->Deleted=1;
        $newTicket->save();
       // return $this->index();
       return redirect("/admin/ticket");
    }
}

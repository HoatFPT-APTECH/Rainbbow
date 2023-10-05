<?php

namespace App\Http\Controllers\AdminControllers;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listTicket= Ticket::all();
        return view('AdminViews.index',['page'=>"ticket",'danhsach'=>$listTicket]);
    //    return response()->json($listTicket,200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('AdminViews.index',['page'=>"ticketCreate"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Price= $request->input('Price');
        $Showtime_Id= $request->input('Showtime_Id');
        $Booking_Id= $request->input('Booking_Id');
        $Seat_Id= $request->input('Seat_Id');
        $Status= $request->input('Status');

        $newTicket= new Ticket();

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
        $newTicket->delete();
       // return $this->index();
       return redirect("/admin/ticket");
    }
}

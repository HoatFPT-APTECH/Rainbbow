<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-file-signature"></i>  Ticket <b>Details</b>      
                            <br><br> <button class="btn btn-primary ">
                        <a href="./ticket/create" style="color: white"><i class="fa-solid fa-user-plus"></i>  Add new Ticket</a>    
                        </button></h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <form action="#">
                                <i class="material-icons">&#xE8B6;</i>
                                <input type="text" class="form-control" placeholder="Search&hellip;">
                          
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Price<i class="fa fa-sort"></i></th>
                        <th>Showtime<i class="fa fa-sort"></i></th>
                        <th>Booking<i class="fa fa-sort"></i></th>
                        <th>Seat<i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Ticket)
                 <tr>
                 
                     <td>
                        {{$Ticket->Id}}
                     </td>
                     <td>
                        {{$Ticket->Price}}
                     </td>
                     <td>
                        Movie: {{$Ticket->showtime->movie->Name}}<br>
                        DateShow: {{$Ticket->showtime->movie->DateShow}}<br>
                        Cinema: {{$Ticket->showtime->cinema->Name}}<br>
                        Room: {{$Ticket->showtime->room->Name}}
                     </td>
                     <td>
                        Order Time: {{$Ticket->booking->OrderTime}}<br>
                        Name: {{$Ticket->booking->user->Name}}<br>
                        Phone: {{$Ticket->booking->user->Phone}}
                     </td>
                     <td>
                        Seat: {{$Ticket->seat->Name}}
                     </td>
                     <td>
                        <a href="/admin/ticket/show/{{$Ticket->Id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                        <a href="/admin/ticket/edit/{{$Ticket->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="/admin/ticket/delete/{{$Ticket->Id}}" onclick="return confirm('Your sure delete')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    </td>
           
                 </tr>
                    @endforeach        
                </tbody>
            </table>
            
        </div>
    </div>  
</div>  
</div>  
</div>  
 
 
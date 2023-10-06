<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-file-signature"></i>  Booking <b>Details</b>      
                            <br><br> <button class="btn btn-primary ">
                        <a href="./booking/create" style="color: white"><i class="fa-solid fa-user-plus"></i>  Add new Booking</a>    
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
                        <th>User Information <i class="fa fa-sort"></i></th>
                        <th >Ticket<i class="fa fa-sort"></i></th>
                        <th>Status<i class="fa fa-sort"></i></th> 
                        <th>Action<i class="fa fa-sort"></i></th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Booking)
                    <tr>
                        <form action="">
                            <td> {{$Booking->Id}} </td>
                            <td> UserName: {{$Booking->user->UserName}}<br>
                                 Name: {{$Booking->user->Name}}<br>
                                 Address: {{$Booking->user->Address}}<br>
                                 Phone: {{$Booking->user->Phone}}
                        </td>
                            <td >
                                
                              <ul  >
                              
                                    @foreach($Booking->tickets as $Ticket)
                                    <li >
                               Id: {{$Ticket->Id}} <br>
                               Price: {{$Ticket->Price}}<br>
                               Movie: {{$Ticket->showtime->movie->Name}}<br>
                               Cinema Name: {{$Ticket->showtime->cinema->Name}}<br>
                               Cinema Address: {{$Ticket->showtime->cinema->Address}}<br>
                               Room: {{$Ticket->showtime->room->Name}}<br>
                            </li>
                               @endforeach
                            
                               
                               
                           
                              </ul>
                            <td>
                                 <ul>
                                    @foreach($Booking->tickets as $Ticket)
                                    <li >
                                        <select name="" id="{{$Ticket->Id}}">
                                            <option value="1" {{$Ticket->Status==1?'selected':' '}} >Đã thanh toán</option>
                                            <option value="0" {{$Ticket->Status==1?'selected':' '}} >Chưa thanh toán</option>
                                        </select>
                                    </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>   
          
                                <button class="btn btn-primary">Update</button>
                                
                            </td>
                        </form>
                        
                      </tr>
           
              
                    @endforeach        
                </tbody>
            </table>
            
        </div>
    </div>  
</div>  
</div>  
</div>  
 
 
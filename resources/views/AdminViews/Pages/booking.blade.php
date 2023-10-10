<style>
    .btn-primary {
  margin: 0 auto;
  display: block;
  text-align: center;
    }
    .search-box button[type='submit'], .search-box input[type='text'] {
  display: flex;
 
  flex-direction: column;
  align-items: center;
      }
      button[type='submit'] {
  background: none;
  border: none;
  padding: 0;
  margin: 0;
  font-size: inherit;
  color: inherit;
  cursor: pointer;
  outline: none;
}
.my-class {
   text-align: center;
  vertical-align: middle;
}
</style>
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-file-signature"></i>  Booking <b>Details</b>      
    
                    </div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <form action="/admin/booking/search">
                                <button type='submit'>  <i class="material-icons">&#xE8B6;</i></button>
                                  <input type="text" name='key' class="form-control" placeholder="Search&hellip;">
                            
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
                        <th >Promotion<i class="fa fa-sort"></i></th>
                        <th>AllPrice<i class="fa fa-sort"></i></th> 
                        <th >Status<i class="fa fa-sort"></i></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Booking)
                    <tr>
                     
                            <td> {{$Booking->Id}} </td>

                            <td> UserName: {{$Booking->user->UserName}}<br>
                                 Name: {{$Booking->user->Name}}<br>
                                 Address: {{$Booking->user->Address}}<br>
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
                            </td>
                            <td class="my-class">
                                
                                   @if ($Booking->Promotion_Id!=null)
                                   Start: {{$Booking->Promotion->Start}}<br>
                                   End: {{$Booking->Promotion->End}}<br>
                                   Promotion Name: {{$Booking->Promotion->promotionCategory->Name}}<br>

                                   
                                   @else
                                   There are no promotions.
                                   @endif
                               </td>
                            

                              
                              <td class="my-class"> Price: <b>{{$Booking->AllPrice}} </b></td>
                            
                                {{--}} <ul>
                                    @foreach($Booking->tickets as $Ticket)
                                    <li >
                                        <select name="" id="{{$Ticket->Id}}">
                                            <option value="1" {{$Ticket->Status==1?'selected':' '}} >Đã thanh toán</option>
                                            <option value="0" {{$Ticket->Status==1?'selected':' '}} >Chưa thanh toán</option>
                                        </select>
                                       <br><br> <button class="btn btn-primary">Update</button>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                               --}}
                         
                                
                               <td class="my-class">
                                
                                   <form action="/admin/booking/updateStatus"  method="POST">
                                        @csrf
                                    <select name="status" id="status">
                                      <option value="1" {{$Booking->Status==1?'selected':' '}} >Đã thanh toán</option>
                                      <option value="0" {{$Booking->Status==0?'selected':' '}} >Chưa thanh toán</option>
                                    </select>
                                 <br><br>  
                                  <button name="booking_id" value="{{$Booking->Id}}" class="btn btn-primary">Update</button>
                                    </form>
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
 
 
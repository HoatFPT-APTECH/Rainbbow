<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2><i class="fa-solid fa-file-signature"></i> Booking <b>Details</b>

                            </div>
                            <div class="col-sm-4">
                                <div class="search-box">
                                    <form action="/admin/booking/search">
                                        <button type='submit'> <i class="material-icons">&#xE8B6;</i></button>
                                        <input type="text" name='key' class="form-control"
                                            placeholder="Search&hellip;">

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Room<i class="fa fa-sort"></i></th>
                                <th>ShowTime</th>
                                <th>Time</th>
                                <th>Seat<i class="fa fa-sort"></i></th>
                                <th>View By Client<i class="fa fa-sort"></i></th>
                    

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{$showTime->Id}} </td>
                             <td>   {{$showTime->room->Name}} </td>
                             <td>
                                <div class="border-bottom">Movie: {{$showTime->movie->Name}} </div>
                                <div class="border-bottom">Price base: ${{$showTime->movie->Price}} </div>
                             </td>
                             <td>
                                <div class="border-bottom">Start: {{$showTime->Start}} </div>
                                <div class="border-bottom">End: {{$showTime->End}} </div>
                             </td>
                             <td>
                                <div class="border-bottom">
                                    Seat Category: A <br>
                                    Price Seat   :  ${{($listSeatA[0]->Coefficient)*($showTime->movie->Price)}}   <br> 
                                    All          : {{sizeof($listSeatA)}} Seat <br>
                                    Seating      : {{$countSeatOrderedA}}
                                </div>
                                <div class="border-bottom">
                                    Seat Category: B <br>
                                    Price Seat   :  ${{($listSeatB[0]->Coefficient)*($showTime->movie->Price)}} <br>
                                    All          : {{sizeof($listSeatB)}} Seat <br>
                                    Seating      : {{$countSeatOrderedB}}
                                </div>
                                <div class="border-bottom">
                                    Seat Category: C <br>
                                    Price Seat   :  ${{($listSeatC[0]->Coefficient)*($showTime->movie->Price)}} <br>
                                    All          : {{sizeof($listSeatC)}} Seat <br>
                                    Seating      : {{$countSeatOrderedC}}
                                </div>
                                <div class="border-bottom">
                                    Seat Category: D <br>
                                    Price Seat   :  ${{($listSeatD[0]->Coefficient)*($showTime->movie->Price)}} <br>
                                    All          : {{sizeof($listSeatD)}} Seat <br>
                                    Seating      : {{$countSeatOrderedD}}
                                </div>
                             </td>
                             <td>
                                <a href="/rainbow/seat_booking/{{$showTime->Id}}" class="btn btn-primary text-light">View</a>
                            </td>
                       
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

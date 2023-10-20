<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2><i class="fa-solid fa-file-signature"></i> Current <b>ShowTime</b>

                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Cinema<i class="fa fa-sort"></i></th>
                                <th>All Room   </th>
                                <th>Room Showtime   </th>
                                <th>Room<i class="fa fa-sort"></i></th>
                                <th>Status<i class="fa fa-sort"></i></th>
                                <th>Action<i class="fa fa-sort"></i></th>
                    

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cinemas as $c)
                                <tr>
                                  <td>{{$c->Id}}</td>
                                  <td> {{$c->Name}} </td>
                                  <td>
                                    {{sizeof($c->rooms)}}
                                  </td>
                                  <td>
                                    {{$c->countShowtime}}
                                  </td>
                                  <td>
                                    @foreach ($c->rooms as $r )
                                    <div class="border-bottom" > {{$r->Name}} </div>
                                    @endforeach
                                   
                                   
                                  </td>
                                  <td>
                                   
                                        @foreach ($c->rooms as $r )
                                        <div class="border-bottom"> {{$r->Status==null?'Blank':"Showtime"}} </div>
                                        @endforeach 
                           
                                </td>
                                  <td>
                                 <?php foreach ($c->rooms as $r) { ?>
                                  <?php  if (!$r->Status==null) { ?>
                                      <div class="border-bottom " >
                                        <button  class=" btn-primary btn btn-sm" onclick="viewDetail({{$r->Showtime->Id}})" >View</button>
                                      </div>
                                  <?php  }
                                    ?>
                                    
                                <?php } ?>
                                  </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

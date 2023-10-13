<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Movie <b>Details</b>       <button class="btn btn-primary ">
                                <a href="/admin/movie/create" style="color: white">Add new movie</a>    
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
                                <th>Image</th>
                                <th>Name <i class="fa fa-sort"></i></th>
                                <th>DateShow</th>
                                <th>VideoTrailer <i class="fa fa-sort"></i></th>
                                <th>Price</th>
                                <th>Description<i class="fa fa-sort"></i></th>
                                <th>MovieCategory</th>
                                <th>Director</th>
                                <th>Productor</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($danhsach as $Movie)
                     <tr>
                        
                         <td>
                            {{$Movie->Id}}
                         </td>
                         <td>
                            <div class="avatar-container">
                                <img class="avatar" src="    {{$Movie->photos[0]->Src}}"/>
                            </div>
                         </td>
                         <td>
                            {{$Movie->Name}}
                         </td>
                          <td>
                            {{$Movie->DateShow}}
                         </td> 
                         <td>
                            {{$Movie->VideoTrailer}}
                         </td>
                         <td>
                            ${{$Movie->Price}}
                         </td>
                         <td style="max-height: 50px">
                            {{$Movie->Description}}
                         </td>
                         <td>
                            {{$Movie->movieCategory->Name}}
                         </td>
                         <td>
                            {{$Movie->director->Name}}
                         </td>
                         <td>
                            {{$Movie->productor->Name}}
                         </td>
                         <td>
                            <a href="/admin/movie/show/{{$Movie->Id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="/admin/movie/edit/{{$Movie->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="/admin/movie/delete/{{$Movie->Id}}" onclick="confirmDeletion(event,this)" class="detele" title="Delete" data-toggle="tooltip"><i class="material-icons" style="color: red;">&#xE872;</i></a>
                       
                        </td>
                     </tr>
                        @endforeach        
                        </tbody>
                    
                </div>
            </div>  
        </div>  
    </div>

</div>
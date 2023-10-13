<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Cinema      <b>Details</b>       <button class="btn btn-primary ">
                        <a href="./cinema/create" style="color: white">Add new Cinema</a>
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
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Địa chỉ</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Cinema)
                 <tr>
                     <td>{{$Cinema->Id}}</td>
                     <td>{{$Cinema->Name}}</td>
                     <td>{{$Cinema->Address}}</td>
                     <td>
                        <a href="/admin/cinema/show/{{$Cinema->Id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                        <a href="/admin/cinema/edit/{{$Cinema->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="/admin/cinema/delete/{{$Cinema->Id}}" onclick="confirmDeletion(event,this)" class="detele?id=" title="Delete" data-toggle="tooltip"><i class="material-icons" style="color: red">&#xE872;</i></a>
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
  
  
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-file-signature"></i>  Director <b>Details</b>      
                            <br><br> <button class="btn btn-primary ">
                        <a href="./director/create" style="color: white"><i class="fa-solid fa-user-plus"></i>  Add new Director</a>    
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
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Director)
                 <tr>
                 
                     <td>
                        {{$Director->Id}}
                     </td>
                     
                     <td>
                        {{$Director->Name}}
                     </td>
                     <td>
                        <a href="/admin/director/show/{{$Director->Id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                        <a href="/admin/director/edit/{{$Director->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="/admin/director/delete/{{$Director->Id}}" onclick="confirmDeletion(event,this)" class="detele?id=" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
 
 
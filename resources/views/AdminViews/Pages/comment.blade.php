<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-file-signature"></i>  Comment <b>Details</b>      
                        
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image <i class="fa fa-sort"></i></th>
                        <th>Content <i class="fa fa-sort"></i></th>
                        <th>User <i class="fa fa-sort"></i></th>
                        <th>Movie</th>
                        <th>Created_At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $Comment)
                 <tr>
                 
                     <td>
                        {{$Comment->Id}}
                     </td>
                     <td>
                        <div class="avatar-container">
                            <img class="avatar" src="    {{$Comment->movie->photos[0]->Src}}"/>
                        </div>
                     </td>
                     <td>
                        {{$Comment->Content}}
                     </td>
                     <td>
                        {{$Comment->user->Name}}
                     </td>
                     <td>
                        {{$Comment->movie->Name}}
                     </td>
                     <td>
                        {{$Comment->Created_At}}
                     </td>
                     <td>
                        <a href="/admin/comment/show/{{$Comment->Id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>          
                        <a href="/admin/comment/delete/{{$Comment->Id}}" onclick="confirmDeletion(event,this)" class="detele" title="Delete" data-toggle="tooltip"><i class="material-icons" style="color: red;">&#xE872;</i></a>
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
 
 
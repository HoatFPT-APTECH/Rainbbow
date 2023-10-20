<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-user"></i>     Account Detail <b>Details</b>       
                        <br><br><button class="btn btn-primary ">
                        <a href="/admin/account/client/create" style="color: white"><i class="fa-solid fa-user-plus"></i>  Add new User</a>    
                        </button></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image<i class="fa fa-sort"></i></th>
                        <th>UserName<i class="fa fa-sort"></i></th>
                        <th>Password<i class="fa fa-sort"></i></th>
                        <th>Name<i class="fa fa-sort"></i></th>
                        <th>Address<i class="fa fa-sort"></i></th>
                        <th>DateOfBirth<i class="fa fa-sort"></i></th>
                        <th>Phone<i class="fa fa-sort"></i></th>
                
                        <th>Role<i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $User)
                 <tr>
                 
                     <td>
                        {{$User->Id}}
                     </td>
                     <td>
                        <div class="avatar-container">
                            <img class="avatar" src="    {{$User->Image==null? 'https://www.freeiconspng.com/uploads/no-image-icon-33.png':$User->Image}}"/>
                        </div>
                     </td>
                     <td>
                        {{$User->UserName}}
                     </td>
                     <td>
                        {{$User->Password}}
                     </td>
                     <td>
                        {{$User->Name}}
                     </td>
                     <td>
                        {{$User->Address}}
                     </td>
                     <td>
                        {{$User->DateOfBirth}}
                     </td>
                     <td>
                        {{$User->Phone}}
                     </td>
                   
                     <td>
                        {{$User->role->Name}}
                     </td>
                     <td>
                        <a href="/admin/account/client/edit/{{$User->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="/admin/account/client/delete/{{$User->Id}}" onclick="return confirm('Your sure delete performer has name: {{$User->UserName}}')" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
 
 
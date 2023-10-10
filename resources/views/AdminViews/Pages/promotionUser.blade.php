<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
<div class="container-xl">

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2><i class="fa-solid fa-user"></i>     Account User have Birthday on  <b>Today</b>       
                        <br><br><button class="btn btn-primary ">
                            <form action="/admin/promotionUser/sendMail" method="post">
                                @csrf
                              Category voucher: 
                              <select name="promotionCategoryId" id="">
                               @foreach ($category as $c )
                                   <option value="{{$c->Id}}"> {{$c->Name}} - ${{$c->Coefficient}} </option>
                               @endforeach

                              </select>
                           
                           <button type="submit" style="margin-left: 25px"  class="btn btn-warning" >Create Discount & Send Mail</button>
                            </form>
                         
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
                        <th>UserName<i class="fa fa-sort"></i></th>
                        <th>Password<i class="fa fa-sort"></i></th>
                        <th>Name<i class="fa fa-sort"></i></th>
                        <th>Address<i class="fa fa-sort"></i></th>
                        <th>DateOfBirth<i class="fa fa-sort"></i></th>
                        <th>Phone<i class="fa fa-sort"></i></th>
                        <th>Image<i class="fa fa-sort"></i></th>
                        <th>Role<i class="fa fa-sort"></i></th>
               
                    </tr>
                </thead>
                <tbody>
                    @foreach($danhsach as $User)
                 <tr>
                 
                     <td>
                        {{$User->Id}}
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
                        {{$User->Image}}
                     </td>
                     <td>
                        {{$User->role->Name}}
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
@if ($sendMail)
<script>
    alert("Sended Mail with code to every body")
</script>
    
@endif
 
 
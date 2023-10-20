<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>Promotion      <b>Details</b>    <br><br>   <button class="btn btn-primary ">
                        <a href="./promotion/create" style="color: white"><i class="fa-solid fa-plus"></i>Add new Promotion</a>
                        </button></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Start <i class="fa fa-sort"></i></th>
                        <th>End <i class="fa fa-sort"></i></th>
                        <th>PromotionCategrory <i class="fa fa-sort"></i></th>
                        <th>Coefficien <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($danhsach as $Promotion)
                 <tr>
                     <td>
                        {{$Promotion->Id}}
                    </td>
                     <td>
                        {{$Promotion->Start}}
                    </td>
                     <td>
                        {{$Promotion->End}}
                    </td>
                    <td>
                        {{$Promotion->promotionCategory->Name}}
                    </td>
                    <td >
                      ${{$Promotion->promotionCategory->Coefficient}}
                    </td>
                     <td>
                       
                        <a href="/admin/promotion/edit/{{$Promotion->Id}}" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="/admin/promotion/delete/{{$Promotion->Id}}" onclick="confirmDeletion(event,this)" class="detele" title="Delete" data-toggle="tooltip"><i class="material-icons" style="color: red;">&#xE872;</i></a>
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
  
  
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Director  <b> Details</b>         <button class="btn btn-primary">
                                <a href="./director/create" style="color: white">Add new Dicrector</a>
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
                    <table class="table table-active-stripeb table-hover ">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name<i class="fa fa-sort"></i></th>
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
                                    <a href="admin/director/{{$Director->Id}}" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                    <a href="admin/director/{{$Director->Id}}/edit" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                    <a href="/admin/director/delete/{{$Director->Id}}" onclick="return confirm('Your sure delete director has name:{{$Director->Name}}')" class="delete?id="title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
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
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Slide Home <b>Manager</b> </h2>
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
                                <th style="max-width:70px">Category</th>
                                <th >Image</th>
                                <th style="min-width: 530px">Update</th>

                            </tr>
                        </thead>
                        <tbody>
                            @for ($s=0;$s<=6;$s++)
                                <tr>
                                    <td> {{ $slide[$s]->Id }} </td>
                                    <td>
                                        {{ $slide[$s]->categorySlide->Name }}

                                    </td>
                                    <td  >
                                        
                                        <img style=" width:10rem; height:auto" id="image{{$s}}" class="card-img-top" src="{{$slide[$s]->Src}}" alt="Card image cap">
                                    </td>
                                    <td>
                                      <form action="/admin/slide_manager/update"  method="POST"  enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" name="category" value="{{$slide[$s]->SlideCategory_Id}}">
                                        <div class="row d-flex justify-content-">
                                            <div class="col-md-8">
                                                <input  onchange="input({{$s}},this)" type="file" id='Src{{$s}}' name='image' class="form-control" 
                                            placeholder="Image{{$s}}" required >
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-primary" type="submit" >Save</button>
                                            </div>
                                         </div>
                                    </form>
                                         
                                      

                                            
                                        

                                    </td>

                                </tr>
                            @endfor
                        </tbody>

                </div>
            </div>
        </div>
        <p>The website will be view: </p>
                <iframe id="web" src="/rainbow" title="Rainbow" style="width: 100%; height: 60vh "></iframe>
    </div>

</div>

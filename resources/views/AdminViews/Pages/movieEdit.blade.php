
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Movie</h1>
    <form method="post" action="/admin/movie/update/{{$Movie->Id}}" enctype="multipart/form-data">
      @csrf
     
      <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" class="form-control" id="nameInput" name="Name" value="{{$Movie->Name}}" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="dateInput">Dateshow</label>
        <input type="datetime-local" class="form-control" id="dateInput" name="date" value="{{$Movie->DateShow}}" >
      </div>
      <div class="form-group">
        <label for="trailerInput">Link trailer:</label>
        <input type="text" class="form-control" id="trailerInput" name="trailer" value="{{$Movie->VideoTrailer	}}" >
      </div>
      <div class="form-group">
        <label for="priceInput">Price:</label>
        <input type="text" class="form-control" id="priceInput" name="price" value="{{$Movie->Price}}" >
      </div>
      <div class="form-group">
        <label for="descriptionInput">Description:</label>
        
        <input class="form-control" id="descriptionInput" name="description" value="{{$Movie->Description}}" >
      </div>
      <div class="form-group">
        <label for="categoryInput">Category:</label>
        <select name="MovieCategory_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListCategory as $category)
              @if ($category->Id == $Movie->MovieCategory_Id )
                  <option value={{$category->Id}} selected>{{$category->Name}}</option>
              @else
                  <option value={{$category->Id}}>{{$category->Name}}</option>
              @endif
          @endforeach
      </select>
        {{-- <select name="MovieCategory_Id" class="form-select" aria-label="Default select example">
            @foreach ($ListCategory as $category )
            <option value={{$category->Id}}>{{$category->Name}}</option>
            @endforeach
          </select> --}}
      </div>
      <div class="form-group">
        <label for="directorInput">Director:</label>
        <select name="Director_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListDirector as $director)
              @if ($director->Id == $Movie->Director_Id )
                  <option value={{$director->Id}} selected>{{$director->Name}}</option>
              @else
                  <option value={{$director->Id}}>{{$director->Name}}</option>
              @endif
          @endforeach
      </select>
        {{-- <select name="Director_Id" class="form-select" aria-label="Default select example" >
          @foreach ($ListDirector as $director )
          <option value={{$director->Id}}>{{$director->Name}}</option>
          @endforeach
        </select> --}}
      </div>
      <div class="form-group">
        <label for="productorInput">Productor:</label>
        <select name="Productor_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListProductor as $productor)
              @if ($productor->Id == $Movie->Productor_Id )
                  <option value={{$productor->Id}} selected>{{$productor->Name}}</option>
              @else
                  <option value={{$productor->Id}}>{{$productor->Name}}</option>
              @endif
          @endforeach
      </select>
        {{-- <select name="Productor_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListProductor as $productor )
          <option value={{$productor->Id}}>{{$productor->Name}}</option>
          @endforeach
        </select> --}}
      </div>
      <div class="row">
        <label for="photo">Main Photo :</label>

        <div class="col">
          <label>Ảnh cũ</label>   
          <br>
          <div class="avatar-container">
           <img class="avatar" src="{{$Movie->photos[0]->Src}}" id="image0"  />
        </div> 
          <input type="file" name="Srcmain" id="uploadFile" class="form-control" onchange="input(0,this)" >
          <br>
        </div>
    </div>
    <br>
 
    <div class="row">
<label for="photo">SlideShow Photo Src:</label>
<div class="col">
<label > Slide 1: </label>
<label>Ảnh cũ</label>   
<br>
<div class="avatar-container">
 <img class="avatar" src="{{$Movie->photos[1]->Src}}" id="image1"  />
</div> 
<input onchange="input(1,this)" type="file" id='Src1' name='Src1' class="form-control" 
 placeholder="Image 1" >
</div>
<div class="col">
<label > Slide 2: </label>
<label>Ảnh cũ</label>   
<br>
<div class="avatar-container">
 <img class="avatar" src="{{$Movie->photos[2]->Src}}" id="image2" />
</div> 
<input placeholder="Image 2" onchange="input(2,this)" type="file" id='Src2' name="Src2" class="form-control" >
</div>
<div class="col">
<label > Slide 3: </label>
<label>Ảnh cũ</label>   
<br>
<div class="avatar-container">
 <img class="avatar" src="{{$Movie->photos[3]->Src}}" id="image3" />
</div> 
<input onchange="input(3,this)" placeholder="Image 3" type="file" id='Src3' name="Src3" class="form-control" >
</div>
</div>
    <br>
    <div class="row">
<div class="col">
<label > Slide 4: </label>
<label>Ảnh cũ</label>   
<br>
<div class="avatar-container">
 <img class="avatar" src="{{$Movie->photos[4]->Src}}" id="image4"/>
</div> 
<input onchange="input(4,this)" placeholder="Image 4" type="file" id='Src4' name='Src4' class="form-control" >
</div>
<div class="col">
<label > Slide 5: </label>
<label>Ảnh cũ</label>   
<br>
<div class="avatar-container">
 <img class="avatar" src="{{$Movie->photos[5]->Src}}" id="image5"/>
</div> 
<input placeholder="Image 5" onchange="input(5,this)" type="file" id='Src5' name="Src5" class="form-control" >
</div>
</div>
    <br>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
</div>
</div>

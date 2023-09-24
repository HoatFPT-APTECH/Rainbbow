<div class="page-wrapper dashboard-wrap">
  <div class="content container-fluid">
<div class="container">
    <h2>View A Movie</h2>
    <form action="xuly.php" method="POST">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @foreach ($danhsach as $Photo)
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{$Photo->Src}}">
          </div>
          @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$Movie->Name}}" readonly>
      </div>
      <div class="form-group">
        <label for="date">Dateshow:</label>
        <input type="datetime" class="form-control" id="date" name="date" value="{{$Movie->DateShow}}" readonly>
      </div>
      <div class="form-group">
        <label for="trailer">Trailer:</label><br>
        <iframe width="1155" height="428" src="{{$Movie->VideoTrailer}}" title="{{$Movie->Name}} Official Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        {{-- <input type="text" class="form-control" id="trailer" name="trailer" value="{{$Movie->VideoTrailer}}" readonly> --}}
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$Movie->Price}}" readonly>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" class="form-control" id="description" name="description" value="{{$Movie->Description}}" readonly>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <input type="text" class="form-control" id="MovieCategory_Id" name="MovieCategory_Id" value="{{$Movie->movieCategory->Name}}" readonly>   
      </div>
      <div class="form-group">
        <label for="director">Director:</label>
        <input type="text" class="form-control" id="Director_Id" name="Director_Id" value="{{$Movie->director->Name}}" readonly>   
      </div>
      <div class="form-group">
        <label for="productor">Productor:</label>
        <input type="text" class="form-control" id="Productor_Id" name="Productor_Id" value="{{$Movie->productor->Name}}" readonly>   
      </div>
    </form>
  </div>
</div>

</div>
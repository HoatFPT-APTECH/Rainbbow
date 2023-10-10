<div class="page-wrapper dashboard-wrap">
  <div class="content container-fluid">
<div class="container">
    <h2>View A Movie</h2>
    <form action="xuly.php" method="POST">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{$danhsach[3]->Src==null ? $danhsach[0]->Src: $danhsach[3]->Src }}" height="500px" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{$danhsach[1]->Src==null ? $danhsach[0]->Src: $danhsach[1]->Src}}" height="500px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{$danhsach[2]->Src==null ? $danhsach[0]->Src: $danhsach[2]->Src}}" height="500px" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
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
       
        <textarea class="form-control" id="description" name="description" cols="30" rows="10" readonly>
          {{$Movie->Description}}
        </textarea>
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
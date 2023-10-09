<div class="page-wrapper dashboard-wrap">
  <div class="content container-fluid">
<div class="container">
  <h2>Add New Movie</h2>
    <form action="/admin/movie" method="POST">
      @csrf
    
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="Name" required>
      </div>
      <div class="form-group">
        <label for="date">Dateshow</label>
        <input type="datetime-local" class="form-control" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="trailer">Link trailer:</label>
        <input type="text" class="form-control" id="trailer" name="trailer" required>
      </div>
      <div class="form-group">
        <label for="price">Price:</label>
        <input type="text" class="form-control" id="price" name="price" required>
      </div>
      <div class="form-group">
        <label for="description">Description:</label>
        <input class="form-control" id="description" name="description" required>
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <select name="MovieCategory_Id" class="form-select" aria-label="Default select example">
            @foreach ($ListCategory as $category )
            <option value={{$category->Id}}>{{$category->Name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="director">Director:</label>
        <select name="Director_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListDirector as $director )
          <option value={{$director->Id}}>{{$director->Name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="productor">Productor:</label>
        <select name="Productor_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListProductor as $productor )
          <option value={{$productor->Id}}>{{$productor->Name}}</option>
          @endforeach
        </select>
      </div>
      <div class="row">
        <label for="photo">Main Photo Src:</label>
        <div class="col">
          <input type="text" id='Srcmain' name='Srcmain' class="form-control" placeholder="The Image for showlist" required>
        </div>
      </div>
      <br>
      <div class="row">
        <label for="photo">SlideShow Photo Src:</label>
        <div class="col">
          <input type="text" id='Src1' name='Src1' class="form-control" required>
        </div>
        <div class="col">
          <input type="text" id='Src2' name="Src2" class="form-control" required>
        </div>
        <div class="col">
          <input type="text" id='Src3' name="Src3" class="form-control" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col">
          <input type="text" id='Src4' name='Src4' class="form-control" required>
        </div>
        <div class="col">
          <input type="text" id='Src5' name="Src5" class="form-control" required>
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Add New Movie</button>
    </form>
  </div>
</div>

</div>
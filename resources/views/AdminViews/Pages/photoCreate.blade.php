<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
      <h2>Add New Photo</h2>
      <form action="./store" method="POST">
        @csrf
        <div class="form-group">
          <label for="Src">Src:</label>
          <input type="text" class="form-control" id="Src" name="Src" required>
        </div>
        <div class="form-group">
          <label for="movie">Movie:</label>
          <select name="Movie_Id" class="form-select" aria-label="Default select example">
              @foreach ($ListMovie as $movie )
              <option value={{$movie->Id}}>{{$movie->Name}}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add New Photo</button>
      </form>
    </div>
  </div>
  
  </div>
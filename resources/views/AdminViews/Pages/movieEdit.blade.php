<!DOCTYPE html>
<html>
<head>
  <title>Edit Movie</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Movie</h1>
    <form method="post" action="/admin/movie/{{$Movie->Id}}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" class="form-control" id="nameInput" name="Name" value="{{$Movie->Name}}" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="dateInput">Dateshow</label>
        <input type="datetime" class="form-control" id="dateInput" name="date" value="{{$Movie->DateShow}}" >
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
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
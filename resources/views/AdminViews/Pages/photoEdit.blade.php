<!DOCTYPE html>
<html>
<head>
  <title>Edit Photo</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Photo</h1>
    <form method="post" action="/admin/photo/{{$Photo->Id}}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label for="SrcInput">Src</label>
        <input type="text" class="form-control" id="SrcInput" name="Src" value="{{$Photo->Src}}" placeholder="Enter Src">
      </div>
      <div class="form-group">
        <label for="movieInput">Movie:</label>
        <select name="Movie_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListMovie as $movie)
              @if ($movie->Id == $Photo->Movie_Id )
                  <option value={{$movie->Id}} selected>{{$movie->Name}}</option>
              @else
                  <option value={{$movie->Id}}>{{$movie->Name}}</option>
              @endif
          @endforeach
      </select>
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
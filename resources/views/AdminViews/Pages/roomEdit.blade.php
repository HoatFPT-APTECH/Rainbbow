<!DOCTYPE html>
<html>
<head>
  <title>Edit Room</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Room</h1>
   {{-- <form method="post" action="/admin/performer/{{$Performer->Id}}"> --}}
    <form method="post" action="/admin/room/update/{{$Room->Id}}">
      @csrf
     {{-- @method('PUT')--}}
      <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" class="form-control" id="nameInput" name="Name" value="{{$Room->Name}}" placeholder="Enter Name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>View Comment</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h2>View Comment</h2>
    <form action="xuly.php" method="POST">
        <div class="container">
            <img src="{{$Comment->movie->photos[0]->Src}}" 
          class="mx-auto d-block" 
          style="width:25%" 
          alt="Bootstrap">
          </div>
     <br><br> <div class="form-group">
        <label for="contentInput">Content:</label>
        <input type="text" class="form-control" id="contentInput" name="Content" value="{{$Comment->Content}}" placeholder="Enter Content">
      </div>
      <div class="form-group">
        <label for="userIdInput">User:</label>
        <input type="text" class="form-control" id="userIdInput" name="User" value="{{$Comment->user->Name}}" placeholder="Enter User ID">
      </div>
      <div class="form-group">
        <label for="movieIdInput">Movie:</label>
        <input type="text" class="form-control" id="movieIdInput" name="Movie" value="{{$Comment->movie->Name}}" placeholder="Enter Movie ID">
      </div>
      <div class="form-group">
        <label for="createdAtInput">Created At:</label>
        <input type="datetime-local" class="form-control" id="createdAtInput" name="Created_At" value="{{$Comment->Created_At}}">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

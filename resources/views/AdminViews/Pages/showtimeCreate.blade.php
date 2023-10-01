<!DOCTYPE html>
<html>
<head>
  <title>Create Showtime</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h1>Create Showtime</h1>
   {{--  <form method="post" action="/admin/performer"> --}}
    <form method="post" action="./store">
      @csrf
      <div class="form-group">
        <label for="startInput">Start:</label>
        <input type="datetime-local" class="form-control" id="startInput" name="Start" placeholder="Select start date">
      </div>
      <div class="form-group">
        <label for="endInput">End:</label>
        <input type="datetime-local" class="form-control" id="endInput" name="End"  placeholder="Select end date">
      </div>
      <div class="form-group">
        <label for="movieIdInput">Movie ID:</label>
        <input type="text" class="form-control" id="movieIdInput" name="Movie_Id"  placeholder="Enter movie ID">
      </div>
      <div class="form-group">
        <label for="cinemaIdInput">Cinema ID:</label>
        <input type="text" class="form-control" id="cinemaIdInput" name="Cinema_Id" placeholder="Enter cinema ID">
      </div>
      <div class="form-group">
        <label for="roomIdInput">Room ID:</label>
        <input type="text" class="form-control" id="roomIdInput" name="Room_id"  placeholder="Enter room ID">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Create Ticket</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h1>Create Ticket</h1>
   {{--  <form method="post" action="/admin/performer"> --}}
    <form method="post" action="./store">
      @csrf
      <div class="form-group">
        <label for="movie">Movie:</label>
        <select name="Movie_Id" class="form-select" aria-label="Default select example">
            @foreach ($listMovie as $movie )
            <option value={{$movie->Id}}>{{$movie->Name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="Cinema">Cinema:</label>
        <select name="Cinema_Id" class="form-select" aria-label="Default select example">
            @foreach ($listCinema as $cinema )
            <option value={{$cinema->Id}}>{{$cinema->Name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="room">Room:</label>
        <select name="Room_Id" class="form-select" aria-label="Default select example">
            @foreach ($listRoom as $room )
            <option value={{$room->Id}}>{{$room->Name}}</option>
            @endforeach
          </select>
      </div>
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="Price" placeholder="Enter Price">
      </div>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="Name" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" id="phone" name="Phone" placeholder="Enter Phone">
      </div>
      <div class="form-group">
        <label for="seat">Seat</label>
        <input type="text" class="form-control" id="Seat" name="Seat" placeholder="Enter Seat">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

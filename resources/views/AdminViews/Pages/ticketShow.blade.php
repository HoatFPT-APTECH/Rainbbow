<!DOCTYPE html>
<html>
<head>
  <title>View Performer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>View Performer</h1>
    <form action="xuly.php" method="POST">
      <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" id="price" name="Price" value="{{$Ticket->Price}}" placeholder="Enter Price">
      </div>
      <div class="form-group">
        <label for="showtimeId">Showtime_Id</label>
        <input type="number" class="form-control" id="showtimeId" name="Showtime_Id" value="{{$Ticket->Showtime_Id}}" placeholder="Enter Showtime_Id">
      </div>
      <div class="form-group">
        <label for="bookingId">Booking_Id</label>
        <input type="number" class="form-control" id="bookingId" name="Booking_Id" value="{{$Ticket->Booking_Id}}" placeholder="Enter Booking_Id">
      </div>
      <div class="form-group">
        <label for="seatId">Seat_Id</label>
        <input type="number" class="form-control" id="seatId" name="Seat_Id" value="{{$Ticket->Seat_Id}}" placeholder="Enter Seat_Id">
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <input type="number" class="form-control" id="status" name="Status" value="{{$Ticket->Status}}" placeholder="Enter Status">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

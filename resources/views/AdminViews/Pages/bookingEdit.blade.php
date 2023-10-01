<!DOCTYPE html>
<html>
<head>
  <title>Edit Booking</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Booking</h1>
   {{-- <form method="post" action="/admin/performer/{{$Performer->Id}}"> --}}
    <form method="post" action="/admin/booking/update/{{$Booking->Id}}">
      @csrf
     {{-- @method('PUT')--}}
      <div class="form-group">
        <label for="userId">User_Id:</label>
        <input type="number" class="form-control" id="userId" name="User_Id" value="{{$Booking->User_Id}}">
    </div>
    <div class="form-group">
        <label for="orderTime">OrderTime:</label>
        <input type="datetime-local" class="form-control" id="orderTime" name="OrderTime" value="{{$Booking->OrderTime}}" >
    </div>
    <div class="form-group">
        <label for="allPrice">AllPrice:</label>
        <input type="number" class="form-control" id="allPrice" name="AllPrice" value="{{$Booking->AllPrice}}">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

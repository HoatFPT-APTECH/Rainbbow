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

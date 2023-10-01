<!DOCTYPE html>
<html>
<head>
  <title>Booking User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h2>Create Booking</h2><br>
    <form method="post" action="./store">
      @csrf
    <div class="form-group">
        <label for="userId">User_Id:</label>
        <input type="number" class="form-control" id="userId" name="User_Id">
    </div>
    <div class="form-group">
        <label for="orderTime">OrderTime:</label>
        <input type="datetime-local" class="form-control" id="orderTime" name="OrderTime" >
    </div>
    <div class="form-group">
        <label for="allPrice">AllPrice:</label>
        <input type="number" class="form-control" id="allPrice" name="AllPrice">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

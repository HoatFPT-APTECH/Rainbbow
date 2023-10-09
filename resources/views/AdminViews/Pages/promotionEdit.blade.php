<!DOCTYPE html>
<html>
<head>
  <title>View Promotion </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Promotion</h1>
    <form action="xuly.php" method="POST">
      <div class="form-group">
        <label for="start">Start Date:</label>
        <input type="datetime-local" class="form-control" id="start" name="Start" value="{{$Promotion->Start}}" >
      </div>
      
      <div class="form-group">
        <label for="end">End Date:</label>
        <input type="datetime-local" class="form-control" id="end" name="End" value="{{$Promotion->End}}" >
      </div>
      
      <div class="form-group">
        <label for="category">Category :</label>
        <input type="text" class="form-control" id="category" name="PromotionCategrory_Id" value="{{$Promotion->promotionCategrory->Name}}">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

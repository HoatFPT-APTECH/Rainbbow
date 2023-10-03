<!DOCTYPE html>
<html>
<head>
  <title>View Promotion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>View promotion</h1>
    <form action="xuly.php" method="POST">
      <div class="form-group">
        <label for="startInput">Start</label>
        <input type="text" class="form-control" id="startInput" name="start" value="{{$Promotion->Start}}">
      </div>
      <div class="form-group">
        <label for="end">End</label>
        <input type="text" class="form-control" id="end" name="end" value="{{$Promotion->End}}" >
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

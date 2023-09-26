<!DOCTYPE html>
<html>
<head>
  <title>Create Performer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h1>Create Performer</h1>
   {{--  <form method="post" action="/admin/performer"> --}}
    <form method="post" action="./store">
      @csrf
      <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" class="form-control" id="nameInput" name="Name" placeholder="Enter Name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Create Promotion </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h1>Create Promotion</h1>
   {{--  <form method="post" action="/admin/performer"> --}}
    <form method="post" action="./store">
      @csrf
      <div class="form-group">
        <label for="start">Start Date:</label>
        <input type="datetime-local" class="form-control" id="start" name="Start" value="2023-02-05T10:00" required>
      </div>
      
      <div class="form-group">
        <label for="end">End Date:</label>
        <input type="datetime-local" class="form-control" id="end" name="End" value="2023-02-12T10:00" required>
      </div>
      
      <div class="form-group">
        <label for="category">Category :</label>
        <select name="PromotionCategrory_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListCategrory as $categrory )
          <option value={{$categrory->Id}}>{{$categrory->Name}}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

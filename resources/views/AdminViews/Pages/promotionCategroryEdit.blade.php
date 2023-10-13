<!DOCTYPE html>
<html>
<head>
  <title>Edit PromotionCategrory</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit PromotionCategrory</h1>
  
    <form method="post" action="/admin/promotionCategrory/update/{{$PromotionCategrory->Id}}">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="Name" value="{{ $PromotionCategrory->Name }}">
    </div>

    <div class="mb-3">
        <label for="coefficient" class="form-label">Hệ số</label>
        <input type="number" class="form-control" id="coefficient" name="Coefficient" value="{{ $PromotionCategrory->Coefficient }}">
    </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

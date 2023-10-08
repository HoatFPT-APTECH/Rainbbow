<!DOCTYPE html>
<html>
<head>
  <title>Edit Promotion</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Promotion</h1>
  
    <form method="post" action="/admin/promotion/update/{{$Promotion->Id}}">
      @csrf
 
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
        <select name="PromotionCategrory_Id" class="form-select" aria-label="Default select example">
          @foreach ($ListCategrory as $categrory)
              @if ($categrory->Id == $Promotion->PromotionCategrory_Id )
                  <option value={{$categrory->Id}} selected>{{$categrory->Name}}</option>
              @else
                  <option value={{$categrory->Id}}>{{$categrory->Name}}</option>
              @endif
          @endforeach
      </select>
        {{--}}<input type="text" class="form-control" id="category" name="PromotionCategrory_Id" value="{{$Promotion->PromotionCategrory_Id}}">--}}
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>


  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h1>Edit Productor</h1>
   {{-- <form method="post" action="/admin/performer/{{$Performer->Id}}"> --}}
    <form method="post" action="/admin/productor/update/{{$Productor->Id}}">
      @csrf
     {{-- @method('PUT')--}}
      <div class="form-group">
        <label for="nameInput">Name</label>
        <input type="text" class="form-control" id="nameInput" name="Name" value="{{$Productor->Name}}" placeholder="Enter Name">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>

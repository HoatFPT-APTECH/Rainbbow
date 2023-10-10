
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
    <h2>Create client Account</h2><br>
    <form method="post" action="/admin/account/client/store">
      @csrf
    <div class="form-group">
        <label for="userName">User Name:</label>
        <input type="text" class="form-control" id="userName" name="UserName">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="Password" >
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="Name">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" class="form-control" id="address" name="Address" >
    </div>
    <div class="form-group">
        <label for="dateOfBirth">Date of Birth:</label>
        <input type="datetime-local" class="form-control" id="dateOfBirth" name="DateOfBirth" >
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="Phone">
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="text" class="form-control" id="image" name="Image">
    </div>
  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>

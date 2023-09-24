<!DOCTYPE html>
<html>
<head>
  <title>View User</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
  <div class="container">
  
    <h2>View User</h2><br>
    <form action="xuly.php" method="POST">
        <div class="form-group">
            <label for="userName">User Name:</label>
            <input type="text" class="form-control" id="userName" name="UserName" value="{{$User->UserName}}">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="Password" value="{{$User->Password}}" >
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="Name" value="{{$User->Name}}" >
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="Address" value="{{$User->Address}}" >
        </div>
        <div class="form-group">
            <label for="dateOfBirth">Date of Birth:</label>
            <input type="datetime-local" class="form-control" id="dateOfBirth" name="DateOfBirth" value="{{$User->DateOfBirth}}">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" id="phone" name="Phone" value="{{$User->Phone}}">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="text" class="form-control" id="image" name="Image" value="{{$User->Image}}">
        </div>
        <div class="form-group">
            <label for="roleId">Role ID:</label>
            {{--<input type="text" class="form-control" id="roleId" name="Role_Id" value="{{$User->Role_Id}}"> --}}
            <input type="text" class="form-control" id="roleId" name="Role_Id" value="{{$User->role->Name}}">
        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

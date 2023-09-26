<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
</head>
<body>
    <div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">
            <form method="POST" action="/store">
            @csrf
            <h1>
                Create Productor
            </h1>
            <form>
                <div class="form-group">
                    <label for="idInput">Id</label>
                    <input type="text" class="form-control" id="idInput" placeholder="Enter Id">

                </div>
                <div class="form-group" >
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
            </form>
        </form>
        </div>
</div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
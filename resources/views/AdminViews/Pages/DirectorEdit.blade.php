<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Edit Director </title>
</head>
<>
    <div class="page-wrapper dashboard-wrap">
        <div class="content container-fluid">
            <div class="container">
                <form method="post" action="/admin/director{{$Director->Id}}">
                    <h1>Edit director</h1>
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input type="text" class="form-control" id="nameInput" name="Name" value="{{$Director->Name}}" placeholder="Enter Name">
                    </div>
<button type="submit" class="btn btn-primary">Submit </button>
                </form>

            </div>

        </div>
    </div>
    <script src="http://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
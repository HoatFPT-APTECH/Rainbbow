<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">

            <h2>Change Account</h2><br>
            <form action="/admin/changeaccount/update/{{$User->Id }}" enctype="multipart/form-data" method="post">
                @csrf
                {{-- @method('PUT') --}}
                <div class="row">
                    <label for="image">Image:</label>
                    <div class="col">

                        <br>
                        <div class="avatar-container">
                            <img class="avatar" src="{{ $User->Image }}" id="image" /><br>
                        </div>
                        <br>
                        <br> <input type="file" name="Image" id="uploadFile" class="form-control"
                            onchange="input(0,this)">
                        <br>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control" name="Password" value="{{ $User->Password }}" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

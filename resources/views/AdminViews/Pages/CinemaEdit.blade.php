
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">
           
                <h1>Edit cinema</h1>
                <form method="post" action="/admin/cinema/update/{{ $Cinema->Id }}">
                @csrf
                <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" name="Name" value="{{ $Cinema->Name }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="Address" value="{{$Cinema->Address}}" >
                </div>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>
        </div>
    </div>
</div>

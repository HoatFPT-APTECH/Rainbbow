<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">
            <form method="post" action="/admin/director/{{ $Director->Id }}">
                <h1>Edit Cinema</h1>
                @csrf

                <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" name="Name" value="{{ $Director->Name }}"
                        placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>

        </div>

    </div>
</div>

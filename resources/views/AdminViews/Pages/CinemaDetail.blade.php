<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">
            <form method="post" action="#">
                <h1> Cinema Detail</h1>
                @csrf

                <div class="form-group">
                    <label for="nameInput">Name</label>
                    <input type="text" class="form-control" id="nameInput" name="Name" value="{{ $Cinema->Name }}"
                        placeholder="Enter Name" readonly>
                </div>
                <div class="form-group">
                    <label for="nameInput">Address </label>
                    <input readonly type="text" class="form-control" id="nameInput" name="Name" value="{{ $Cinema->Address }}"
                        placeholder="Enter Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit </button>
            </form>

        </div>

    </div>
</div>

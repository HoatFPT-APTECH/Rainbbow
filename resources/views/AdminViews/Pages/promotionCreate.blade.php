
<div class="page-wrapper dashboard-wrap">
    <div class="content container-fluid">
        <div class="container">
            <form method="POST" action="/admin/promotion/store">
                @csrf
                <h1>
                    Create Promotion
                </h1>

                <div class="form-group">
                    <label for="startInput">Start</label>
                    <input name="inputStart" type="text" class="form-control" id="startInput" placeholder="Enter Start">
                </div>
                <div class="form-group">
                    <label for="endInput">End</label>
                    <input name="endInput" type="text" class="form-control" id="endInput" placeholder="Enter End">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>



        </div>

    </div>

</div>

    <div class="page-wrapper dashboard-wrap">
        <div class="content container-fluid">
            <div class="container">
                <form method="POST" action="/admin/cinema/store">
                    @csrf
                    <h1>
                        Create Cinema
                    </h1>

                    <div class="form-group">
                        <label for="nameInput">Name</label>
                        <input name="inputName" type="text" class="form-control" id="nameInput"
                            placeholder="Enter Name">


                    </div>
                    <div class="form-group">
                        <label for="addressInput"> Address</label>
                        <input name="addressInput" type="text" class="form-control" id="addressInput"
                            placeholder="Enter Address">


                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>



            </div>

        </div>

    </div>
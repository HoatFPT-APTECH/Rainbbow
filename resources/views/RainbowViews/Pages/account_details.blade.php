<style>
    body{
background-color:#f2f6fc;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}
    </style>
    <div class="container">
<div class="container-xl px-4 mt-4">
    <!-- Account page navigation-->
    <nav class="nav nav-borders" style="margin-top: 130px">
        <a class="nav-link active ms-0" href="/rainbow/account_details/{{$id}}">Profile</a>
        <a class="nav-link" href="/rainbow/account_booking/{{$id}}">Booking</a>
        <a class="nav-link" href="/rainbow/account_promotion/{{$id}}">Promotion</a>
        {{-- <a class="nav-link" href="#"  target="__blank">Notifications</a> --}}
    </nav>
    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <?php $Image = $userDetails->Image ?? 'http://bootdey.com/img/Content/avatar/avatar1.png'; ?>
                    <img class="img-account-profile rounded-circle mb-2" style="width:160px; height:160px" src="{{$Image}}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4"></div>
                    <!-- Profile picture upload button-->
                    <br>
                    <form class="form-inline" method="post" action="/rainbow/account_details/updateURL/{{$userDetails->Id}}" enctype="multipart/form-data">
                        @csrf
                          <div class="col-md-4 input-group">
                            <div class="input-group-btn">
                                <input id="uploadFile" type="file" class="btn btn-default" name="Image" >
                            </div>
                            <button style="margin-left:20px" type="submit" class="btn btn-primary mb-2">Upload new image</button>

                        </div>
                      </form>
                      
                    {{-- <form>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div> 
                    <button class="btn btn-primary" id="edit-avatar">Upload new image</button>
                </form> --}}
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form method="post" action="/rainbow/account_details/update/{{$userDetails->Id}}">
                        @csrf
                        {{-- @method('PUT') --}}
                        {{-- <!-- Form Group (username)--> --}}

                        <div class= "mb-3">
                            <label class="small mb-1" for="inputUsername">UserName</label>
                            <input class="form-control" id="Username" name="UserName" type="text" value="{{$userDetails->UserName}}">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputName">Name</label>
                                <input class="form-control" id="Name" name="Name" type="text" value="{{$userDetails->Name}}" >
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputAddress">Address</label>
                                <input class="form-control" id="Address" name="Address" type="text" value="{{$userDetails->Address}}" >
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputBirth">Date of birth</label>
                                <input class="form-control" id="DateOfBirth" name="DateOfBirth" type="datetime-local" value="{{$userDetails->DateOfBirth}}" >
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone</label>
                                <input class="form-control" id="Phone" name="Phone" type="text"  value="{{$userDetails->Phone}}" >
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        {{-- <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div> --}}
                        <!-- Form Row-->
                        {{-- <div class="row gx-3 mb-3"> --}}
                            <!-- Form Group (phone number)-->
                            {{-- <div class="col-md-6">
                                <label class="small mb-1" for="inputRole">Role</label>
                                <input class="form-control" id="inputRole" type="tel" value="{{$userDetails->Role_Id}}">
                            </div> --}}
                            <!-- Form Group (birthday)-->
                            {{-- <div class="col-md-6">
                                <label class="small mb-1" for="inputBirthday">Birthday</label>
                                <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                            </div> --}}
                        {{-- </div> --}}
                        <!-- Save changes button-->
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

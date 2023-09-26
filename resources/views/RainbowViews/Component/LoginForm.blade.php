<div class="container rounded" id="FormLogin" style="overflow: hidden">

    <div class="col-sm-8 col-sm-offset-2 main">
        <div class="col-sm-6 left-side ">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp" alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;">

        </div><!--col-sm-6-->

        <div class="col-sm-6 right-side ">
            <h1>Login</h1>
            <p>Sign into your account</p>

            <!--Form with header-->
            <div class="form">

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" id="UserName" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
              
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" id="Password" class="form-control"  placeholder="Password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <div id="invalidAcc" style="display: none;">
                <div class="alert alert-danger mt-3 small " id="loginError">
                    Invalid Phone Numnber or password. Please try again.
                  </div>
              </div>
                <div class="text-xs-center">
                    <button  class="btn btn-dark text-light" type="button" onclick="Login()">Login</button>
                </div>
                <a href="#" class="small">Forgot password?</a>
                <br/>
                Don't have an account? <a href="./register" class="text-primary ">Register here</a>

            </div>


  
  <style>
     *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
  }
  body{
    
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(https://pixner.net/boleto/demo/assets/images/account/account-bg.jpg) no-repeat;
    background-size: cover;
    background-position: center;
   
  }
  .wrapper{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 420px;
  background: transparent;
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(9px);
  color: #fff;
  border-radius: 12px;
  padding: 30px 40px;
  margin-top: 180px;
  margin-bottom: 80px;
  }
  .wrapper h1{
    font-size: 36px;
    text-align: center;
    color: #fff;
  }
  .wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    
    margin: 30px 0;
  }
  .input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding: 20px 45px 20px 20px;
  }
  .input-box input::placeholder{
    color: #fff;
  }
  .input-box i{
    position: absolute;
    right: 20px;
    top: 30%;
    transform: translate(-50%);
    font-size: 20px;
  
  }
  .wrapper .remember-forgot{
    
    justify-content: space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
  }
  .remember-forgot label input{
    accent-color: #fff;
    margin-right: 3px;
  
  }
  .remember-forgot a{
    color: #fff;
    text-decoration: none;
  
  }
  .remember-forgot a:hover{
    text-decoration: underline;
  }
  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: linear-gradient(to right, #fc5c7d, #6a82fb);
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #ffffff;
    font-weight: 600;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);

  }
  .wrapper .register-link{
    font-size: 14.5px;
    text-align: center;
    margin: 20px 0 15px;
  
  }
  .register-link p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
  }
  .register-link p a:hover{
    text-decoration: underline;
  }

  </style>

  <div class="wrapper container mt-5">
    <form action="/rainbow/register/store" method="post">
        @csrf
      <h1><b>Register</b></h1>
      <div class="input-box">
        <input type="text" id="userName" name="UserName" placeholder="EMAIL*" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" id="password" name="Password" placeholder="PASSWORD*" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="CONFIRM PASSWORD*" required>
        <i class='bx bxs-user'></i>
      </div>
     
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label><br>
      </div>
      <button type="submit" class="btn">SIGN UP</button>
      <div class="register-link">
        <p>Already have an account? <a href="#" style="color: #31d7a9;;" >Login</a></p>
      </div>
    </form>
  </div>

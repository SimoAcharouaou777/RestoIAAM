<?php
       include("../include/cnx.php");
       include "../controller/signin.php";
      
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <!--the sign in form -->
        
        <form action="../controller/signin.php" class="sign-in-form" method="post" id="sign-in-form">
          <?php
        if(!empty($errorMessagelog)){
            echo '<div style="color:red">';
            echo $errorMessagelog;
            echo '</div>';
            }
        ?> 
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user" style="color: #ff822e"></i>
            <input type="text" placeholder="Username" name="username_log" />
            <span class="msg-validation-signin">write a vailde Username</span>
          </div>
          <div class="input-field">
            <i class="fas fa-lock" style="color: #ff822e"></i>
            <input type="password" placeholder="Password" name="password_log"/>
            <span class="msg-validation-signin">write a vailde Password</span>

          </div>

          <button type="submit" value="Login" class="btn solid" name="submit_login" >login</button>

          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter "style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in" style="color: #ff822e"></i>
            </a>
          </div>
        </form>
        <!--the Sign up form -->
        <?php
$errorMessage = "";
$successMessage = "";

?>
        <form action="" class="sign-up-form" method="post" id="sign-up-form" >

          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user" style="color: #ff822e"></i>
            <input type="text" placeholder="Username" name="username"/>
            <span class="msg-validation-signin">write a vailde Username</span>
          </div>

          <div class="input-field">
            <i class="fas fa-envelope" style="color: #ff822e"></i>
            <input type="email" id='email_' placeholder="Email" name="email" />
            <span class="msg-validation-signin">write a vailde Email</span>

          </div>

          <div class="input-field">
            <i class="fas fa-lock" style="color: #ff822e"></i>
            <input type="password" placeholder="Password"  name="password"/>
            <span class="msg-validation-signin">write a vailde Username</span>
          </div>

          <div class="input-field">
            <i class="fas fa-lock" style="color: #ff822e"></i>
            <select class="form-select" aria-label="Default select example" name="usertype">
                    <option selected style="color : #ff822e">Why are you here ? </option>
                    <option value="shef">job application</option>
                    <option value="client">to make an order</option>
            </select>
          </div>
          <p id='signupError'></p>
          <input type="submit" class="btn" value="Sign up " name="submit"  />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google" style="color: #ff822e"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in" style="color: #ff822e"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="image/signup.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="image/signup.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="sing.js"></script>
  <script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('sign-up-form').addEventListener('submit', function (event) {
        event.preventDefault();
        var formData = new FormData(this);
        var myrequest = new XMLHttpRequest();
        myrequest.open('POST', 'test.php', true); 
        myrequest.onreadystatechange = function () {
            if (myrequest.readyState === 4 && myrequest.status === 200) {
                document.getElementById('signupError').innerHTML = myrequest.responseText;
            }
        };
        myrequest.send(formData);
    });
});

</script>

</body>

</html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fix-It</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet"/>
    <link href="css/main1.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato|Nanum+Gothic:700|Raleway&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
    <link href="jquery/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
</head>
<body> 
  <div class="s004">  
<center>
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login </div>
        <div class="title signup">Sign UP</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form class="login" method="POST" action="loginauth.php">
          <div class="field" hidden>
          <input type="text" name="pid" id="pid"  autocomplete="off" value="<?php echo $_GET['id']?>" required hidden>
</div>
<div class="field" hidden>
          <input type="text" name="sid" id="sid"  autocomplete="off" value="<?php echo $_GET['sid']?>" required hidden>
           
</div>
 
            <div class="field">
 <input type="email" name="uname" id="uname"  autocomplete="off" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password" placeholder="Password"  name="upassword" id="upassword" required  autocomplete="off" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8}" title="Must contain at least one number and one uppercase and lowercase letter, and 8 characters">
            </div>   
            <div class="pass-link"><a href="forgetpsswd.php">Forgot password?</a></div>
            <div class="field btn" id="logbtn" >
              <div class="btn-layer1"></div>
              <input type="submit" value="Login" name="login">
            </div>
            
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action="signupauth.php" class="signup" method="POST">
          <div class="field" hidden>
          <input type="text" name="pid" id="pid"  autocomplete="off" value="<?php echo $_GET['id']?>" required hidden>
           
</div>
<div class="field" hidden>
          <input type="text" name="sid" id="sid"  autocomplete="off" value="<?php echo $_GET['sid']?>" required hidden>
           
</div>
          <div class="field">
                        <input type="text" placeholder="name" name="uname" required autocomplete="off">
                      </div>
            <div class="field">
              <input type="email" name="uemail" placeholder="Email Address" required autocomplete="off">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="upass"  pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8}" title="Must contain at least one number and one uppercase and lowercase letter, and 8 characters" required autocomplete="off">
            </div>
            <div class="field">
            <input type="text" name="umono" required  autocomplete="off" pattern="[0-9]{10}" title="Mobile nomust be of 10 digits" placeholder="Mobile Number" >
            </div>
           
            <div class="field btn">
              <div class="btn-layer1"></div>
              <input type="submit" value="Signup" name="signup">
            </div>
          </form>
        </div>
      </div>
    </div>

</center></div>
 
<footer class="bg-light text-center relative-bottom">
          <!-- Grid container -->
      </br><br/>
            <!-- Section: Social media -->
            <section class="mb-4" >
              <!-- Facebook -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/profile.php?id=100089719374545"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>
        
              <!-- Twitter -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="https://twitter.com/Fixit151989It"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>
        
              <!-- Google -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #dd4b39;"
                href="https://myaccount.google.com/?utm_source=chrome-profile-chooser&pli=1"
                role="button"
                ><i class="fab fa-google"></i
              ></a>
        
              <!-- Instagram -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://www.instagram.com/fixit_599/"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <!-- Linkedin -->
              <a
        class="btn text-white btn-floating m-1"
        style="background-color:#4DE627;"
        href="tel:9106113352"  
        role="button"
        ><i class="fab fa-whatsapp"></i
      ></a>
        
              <a
                class="btn text-white btn-floating m-1"
                style="background-color:#FD8827;"
                href="emailinvite.php"
                role="button"
                ><i class="fas fa-envelope"></i
              ></a>
            
            </section>
            <!-- Section: Social media -->
         
          <!-- Grid container -->
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color:#b0ababa9;font-style:bold;color:#FD8827;font-size:20px;">
            Feedback For
            <a href="admin/template/pages/forms/feedbackform.php" style="color:#21209c;font-style:bold;font-size:20px;"> @Website</a> 
          </div>
          <!-- Copyright -->
        </footer>   
<script src="js/extention/choices.js"></script>
      <script src="js/jquery-3.4.1.min.js"></script>
      <script>
                const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
  </script>

            <script>
          
              
              </script>
</body>
</html>
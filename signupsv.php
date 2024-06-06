<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fix-It</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
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
        
        <div class="title signup" style="color:#21209c">Sign UP</div>
      </div>
      <div class="form-container">
        
        <div class="form-inner" style="width:600px;">
          <form action="signupauth.php" class="signup" method="POST">
          <div class="field">
                        <input type="text" placeholder="Name" name="name" required autocomplete="off">
                      </div>
            <div class="field">
              <input type="email" name="email" placeholder="Email Address" required autocomplete="off">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="upass"  pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{8}" title="Must contain at least one number and one uppercase and lowercase letter, and 8 characters" required autocomplete="off">
            </div>
            <div class="field">
            <input type="text" name="uadd" required  autocomplete="off" placeholder="Address" >
            </div>
            <div class="field btn">
              <div class="btn-layer1"></div>
              <input type="submit" value="Next" name="next">
            </div>
            <div class="field">
            <input type="text" name="spmono" required  autocomplete="off" pattern="[0-9]{10}" title="Mobile nomust be of 10 digits" placeholder="Mobile Number" >
            </div>
            <div class="field">
            <input type="text" name="wpmono" required  autocomplete="off" pattern="[0-9]{10}" title="Mobile nomust be of 10 digits" placeholder="WhatsApp Number" >
            </div>
            <div class="field">
                        <input type="text" placeholder="FaceBook ID" name="fbid" required autocomplete="off">
                      </div>
            <div class="field">
                        <input type="text" placeholder="Instagram ID" name="istid" required autocomplete="off">
                      </div>
                      <div class="field btn">
              <div class="btn-layer1"></div>
              <input type="submit" value="Next" name="next1">
            </div>
            <?php 
                              include 'connection.php';
                              $sql = "SELECT * FROM service";
                               $result =  mysqli_query($conn, $sql);
                               while($row = mysqli_fetch_assoc($result)) {?>
                <div class="field">
                        <input type="text" name="sid" value="<?php echo $row['service_id']; ?>" >
                      </div>                
<div class="field">
                      <input type="text" name="service1"
						  placeholder="select service" list="select_service">               
            <datalist id="select_service">
           <option> <?php echo $row['service_type']; ?></option><?php }?>
</datalist></div>
          </form>
        </div>
      </div>
    </div>

</center></div>

    <footer class="bg-light text-center">
  <!-- Grid container -->
  <div class="container p-4 pb-0" >
    <!-- Section: Social media -->
    <section class="mb-4" >
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color:#4DE627;"
        href="#!"
        role="button"
        ><i class="fab fa-whatsapp"></i
      ></a>
      <!--Email-->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color:#FD8827;"
        href="#!"
        role="button"
        ><i class="fas fa-envelope"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color:#b0ababa9;font-style:bold;color:#FD8827;font-size:20px;">
    Sign UP As A
    <a href="https://mdbootstrap.com/" style="color:#21209c;font-style:bold;font-size:20px;"> @Service Provider</a> 
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
</body>
</html>
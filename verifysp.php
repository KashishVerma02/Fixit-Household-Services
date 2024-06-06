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
    <script src="sweetalert2.all.js"></script>
</head>
<body>
<div class="s004">  
 
<center>
<div class="wrapper">
      <div class="title-text">
        <div class="title login" style="color:#21209c">Check Your Email </div>
        </div>
      <div class="form-container">
      <div class="form-inner">
<form action="#" class="signup" method="POST">
          
            <div class="field">
              <input type="text" name="otp" pattern="[0-9]{6}" title="OTP must be of 6 digits" placeholder="Enter Security PIN" required autocomplete="off">
            </div>
            <div class="field btn">
              <div class="btn-layer1"></div>
              <input type="submit" value="Verify" name="sendotp_btn">
            </div></div>
          </form></div></div></div>
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
          <?php 
  
 if(isset($_POST["sendotp_btn"])) 
 {
   include 'connection.php';
   $otp = $_POST["otp"];
   $userid = $_GET['userid'];
  // echo $otp,$userid;
 // echo "<script>alert('hii')</script>";
//echo $otp;
$sql = "SELECT * FROM authentication WHERE otp = '$otp' AND exp != 1 AND NOW() <= DATE_ADD(created,INTERVAL 1 HOUR)";   
$result = mysqli_query($conn,$sql);
//echo "<script>alert('hii')</script>";
$c = mysqli_num_rows($result);
echo $c;
if($c==1)
{
   // echo "<script>alert('hii')</script>";
    $que = "UPDATE authentication SET exp = 1 WHERE otp='$otp'";
    mysqli_query($conn,$que);
    //echo "<script>alert('hii')</script>";
   //header('Location:forgetpsswd_newpsswdsp.php?userid=$userid');
?>
<meta http-equiv = "refresh" content = "1; url = forgetpsswd_newpsswdsp.php?userid=<?php echo $userid; ?> " />
<?php
 }
 else{     
  echo "<script>
  Swal.fire({
  icon:'error',
  text:'Invalid Security PIN'
  })</script>";
 }}
          ?>
          </body>
</html>
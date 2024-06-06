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
        <div class="title login" style="color:#21209c;">Invite Friends</div>
        </div>
      <div class="form-container">
      <div class="form-inner">
<form action="#" class="signup" method="POST">
          
           <div class="field">
              <input type="email" placeholder="EmailId" name="emailid" required autocomplete="off">
            </div>
            <div class="field" hidden>
              <input type="text" value="To Invite You In This Website" name="sub" required autocomplete="off" hidden>
            </div>
            <div class="field" hidden>
              <input type="text" value="Fix-It Website Is Very Usefull And provides All The Household Related Services On THe One Platform And One Could Compare Service Provider Pricewise, Ratingwise And Distancewise" name="msg" required autocomplete="off" hidden>
            </div>
            <div class="field btn">
              <div class="btn-layer1"></div>
              <input type="submit" value="Submit" name="email" id="email">
            </div></div>
          </form></div></div></div>
          </center>
          <footer class="bg-light text-center">
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
                href="www.google.com"
                role="button"
                ><i class="fab fa-google"></i
              ></a>
        
              <!-- Instagram -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://instagram.com/fixit_599?igshid=YmMyMTA2M2Y="
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <!-- Linkedin -->
              <a
        class="btn text-white btn-floating m-1"
        style="background-color:#4DE627;"
        href="https://wa.me/message/PMDZQNAZ6RWEK1"  
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
            Sign IN As A
            <a href="loginsp.php" style="color:#21209c;font-style:bold;font-size:20px;"> @Service Provider</a> 
          </div>
          <!-- Copyright -->
        </footer>  
        </div>
        <?php
         use PHPMailer\PHPMailer\PHPMailer;
         use PHPMailer\PHPMailer\Exception;
         require 'PhpMailer/PHPMailer-master/src/Exception.php';
         require 'PhpMailer/PHPMailer-master/src/PHPMailer.php';
         require 'PhpMailer/PHPMailer-master/src/SMTP.php';
        if(isset($_POST['email']))
        {
          include 'connection.php';
          
          $mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'fixit151989@gmail.com';
$mail->Password = 'tdolamooecdtoctd'; 
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('fixit151989@gmail.com');
$mail->addAddress($_POST["emailid"]);
$mail->isHTML (true);
$mail->Subject = $_POST["sub"];
$mail->Body = $_POST["msg"];
$mail->send();

echo 
"
<script>
alert('Email sent successfully');
document.location.href ='emailinvite.php';
</script>";
        }
           ?>
          </body>
</html>


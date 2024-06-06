<?php
    session_start();
    
    if(!empty($_POST["verify"])) {
      $id = $_POST['spid'];
      
      $captcha = $_POST["captcha"];

      $captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_STRING);

      if(empty($captcha)) {
        $captchaError = array(
          "status" => "alert-danger",
          "message" => "Please enter the captcha"
        );?>
        <?php
      }
      else if($_SESSION['CAPTCHA_CODE'] == $captchaUser){
        $captchaError = array(
          "status" => "alert-success",
          "message" => "Captcha is valid" );
          header("location:serviceprovider/template/pages/forms/index.php?proid=$id");
          ?>
        <?php
       
      } else {
        $captchaError = array(
          "status" => "alert-danger",
          "message" => "Captcha is invalid"
        );
      }
    }  
?>
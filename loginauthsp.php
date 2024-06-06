<html lang="en">
    <head>
    <script src="sweetalert2.all.js"></script>
</head>
<body>
<?php 
try{
 
  include 'connection.php';
      if(isset($_POST['login']))
{
      error_reporting(0);
         $username = mysqli_real_escape_string($conn,$_POST['uname']);
           $pass = $_POST['upassword'];
           //$id = $_POST['pid'];
         //   echo $username;
        // echo "<script>alert('hii')</script>";
         $sql = "SELECT * FROM serviceprovider WHERE provideremailid = '$username' AND sp_password = '$pass' ";
        $result = mysqli_query($conn, $sql) or die("Query failed");
         if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["spid"] = $row['providerid'];
                   $_SESSION["spemailid"] = $row['provideremailid'];
                   $spid = $_SESSION["spid"];
                    echo "<script>
                    Swal.fire({
                    icon:'success',
                    text:'Loged In Successfully'
                    })</script>"; 
                  // header("location:serviceprovider/template/pages/forms/index.php?proid=$spid");
                    }?>
                    <meta http-equiv = "refresh" content = "2; url = c2.php?proid=<?php echo $spid; ?>" />
                    <?php
                    }
         else{     
          echo "<script>
          Swal.fire({
          icon:'error',
          text:'Invalid username or password'
          })</script>";
         // echo "<script>alert('hii')</script>";?>
         <meta http-equiv = "refresh" content = "2; url = loginsp.php" />
         <?php
        }
    }
    }
    catch(PDOException $e) {
      echo "msg:" . "<br>" . $e->getMessage();
    }
          ?>
          </body>
       </html>  
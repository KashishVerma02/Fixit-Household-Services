<html lang="en">
    <head>
    <script src="sweetalert2.all.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
<?php 
try{
  session_start();
  include 'connection.php';
      if(isset($_POST['login']))
{
      error_reporting(0);
         $username = mysqli_real_escape_string($conn,$_POST['uname']);
           $pass = $_POST['upassword'];
           $id = $_POST['pid'];
           $sid = $_POST['sid']; 
           }
         //   echo $username;
        // echo "<script>alert('hii')</script>";
         $sql = "SELECT * FROM registered_user WHERE emailid = '$username' AND userpassword = '$pass' ";
        $result = mysqli_query($conn, $sql) or die("Query failed");
         if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    session_start();
                    $_SESSION["userid"] = $row['userid'];
                   $_SESSION["uemailid"] = $row['emailid'];
                   $uid = $_SESSION["userid"];
                    echo "<script>
                    Swal.fire({
                    icon:'success',
                    text:'Loged In Successfully'
                    })</script>"; 
                //    header("location:more.php?id=$id&userid=$uid&sid=$sid");?>
                <meta http-equiv = "refresh" content = "2; url = c1.php?id=<?php echo $id;?>&userid=<?php echo $uid;?>&sid=<?php echo $sid;?>" />
                <?php
                          }}
         else{     
          echo "<script>
          Swal.fire({
          icon:'error',
          text:'Invalid username or password'
          })</script>";
         // echo "<script>alert('hii')</script>";?>
         <meta http-equiv = "refresh" content = "2; url = loginmain.php?id=<?php echo $id;?>&sid=<?php echo $sid;?>" />
         <?php
        }
    }
    catch(PDOException $e) {
      echo "msg:" . "<br>" . $e->getMessage();
    }
          ?>
          </body>
       </html>  
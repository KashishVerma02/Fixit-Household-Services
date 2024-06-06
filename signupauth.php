<html lang="en">
    <head>
    <script src="sweetalert2.all.js"></script>
</head>
<body>
<?php 
 try{
          include 'connection.php';
          //echo "<script>alert('hii')</script>";
          if(isset($_POST['signup']))
          {
            $id = $_POST['pid'];
           $sid = $_POST['sid'];
          $username = $_POST['uname'];
          $useremail = $_POST['uemail'];
          $usermono = $_POST['umono'];
          $userpass = $_POST['upass'];
         // $id = $_POST['pid'];
          //$sid = $_POST['sid'];
          //echo $username;
          $que = "SELECT * FROM registered_user WHERE emailid='$useremail'";
  $result = mysqli_query($conn,$que);
  $row_count=mysqli_num_rows($result);
  if($row_count==0){
         $sql = "INSERT INTO registered_user(uname,emailid,usermono,userpassword) values('$username','$useremail','$usermono','$userpass')";
        mysqli_query($conn,$sql) or die("query unsuccessfull");
        $query = "SELECT * FROM registered_user WHERE emailid='$useremail'";
        $result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)){
            $uid = $row['userid'];
            //echo $pid;
        }
      echo "<script>
         Swal.fire({
        icon:'success',
         text:'Signed Up Successfully'
         })</script>" ;
        // header("location:c1.php?id=$id&userid=$uid&sid=$sid");
        ?>
        <meta http-equiv = "refresh" content = "2; url = c1.php?id=<?php echo $id;?>&userid=<?php echo $uid;?>&sid=<?php echo $sid;?>" />
        <?php
        }
        else{
            echo "<script>
          Swal.fire({
          icon:'error',
          text:'Already Exixts '
          })</script>" ;
          }
    }}
    catch(PDOException $e) {
        echo "msg:" . "<br>" . $e->getMessage();
      }
          ?>
           
          </body>
       </html>  
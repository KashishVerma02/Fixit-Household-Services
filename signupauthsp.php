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
           //echo "adfsdgv";
           $name=$_POST['spname'];
           $email=$_POST['spemail'];
           $pass=$_POST['sppass'];
           $add=$_POST['spadd'];
           $mono=$_POST['spmono'];
           $wpmono=$_POST['wpmono'];
           $fbid=$_POST['spfbid'];
           $instaid=$_POST['spistid'];
           $charge=$_POST['spv_charge'];
           //$img=$_POST['simg'];
           $desc=$_POST['spdesc'];
          // $gpay=$_POST['gpay_id'];
           $file_name=$_FILES['f1']['name'];
        $file_tmp=$_FILES['f1']['tmp_name'];
        $img=addslashes($_FILES['f1']['name']);
        $imgc=addslashes(file_get_contents($_FILES['f1']['tmp_name']));
        $file_size=$_FILES['f1']['size'];
        $file_type=$_FILES['f1']['type']; 
           //echo $name,$email,$pass,$add,$mono,$wpmono,$fbid,$instaid,$charge,$desc;
          //$id = $_POST['pid'];
         // echo "<script>alert('hii')</script>";
          //echo $username;
          $file_name1=$_FILES['gpay_id']['name'];
          $file_tmp1=$_FILES['gpay_id']['tmp_name'];
          $img1=addslashes($_FILES['gpay_id']['name']);
          $imgc1=addslashes(file_get_contents($_FILES['gpay_id']['tmp_name']));
          $file_size1=$_FILES['gpay_id']['size'];
          $file_type1=$_FILES['gpay_id']['type'];
          $que = "SELECT * FROM serviceprovider WHERE provideremailid='$email'";
  $result = mysqli_query($conn,$que);
  $row_count=mysqli_num_rows($result);
  if($row_count==0){
         $sql = "INSERT INTO serviceprovider(providername,sp_password,address,provideremailid,mobile_no,whatsapp_no,facebookid,instaid,description,visit_charge,sp_img,img_text,gpay_id,g_img_text) values('$name','$pass','$add','$email','$mono','$wpmono','$fbid','$instaid','$desc',$charge,'$img','$imgc','$img1','$imgc1')";
        mysqli_query($conn,$sql) or die("query unsuccessfull");
        $dest="image/";
        $t_file=$dest.basename($_FILES['f1']['name']);
        move_uploaded_file($file_tmp,$t_file);
        $t1_file=$dest.basename($_FILES['gpay_id']['name']);
        move_uploaded_file($file_tmp1,$t1_file);
        $que1 = "SELECT * FROM serviceprovider WHERE provideremailid='$email'";
        $result = mysqli_query($conn,$que1);
        while($row = mysqli_fetch_assoc($result)){
            $pid = $row['providerid'];
            //echo $pid;
        }
        $query = "INSERT INTO sp_rating(rating,providerid) VALUES(0,$pid)";
       // echo $query;
        mysqli_query($conn,$query);
         echo "<script>
         Swal.fire({
        icon:'success',
         text:'Signed Up Successfully'
         })</script>" ;
      //  header("location:loginsp.php");
        ?>
        <meta http-equiv = "refresh" content = "2; url = c2.php?proid=<?php echo $pid; ?>" />
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
<?php 
include 'connection.php';
 $lat = $_POST['lat'];
 $uid = $_POST['uid'];
 $long = $_POST['long'];
 $myBrowser = $_POST['myBrowser'];
 $MyIp = $_POST['MyIp'];
 $Device = $_POST['Device'];
 //$ip = $_POST['ip'];
// $b = $_POST['b'];
 $sql = "INSERT INTO registered_user_location(user___id,latitude,longitude,device_type,ip_address,browser) VALUES($uid,$lat,$long,'$Device','$MyIp','$myBrowser')";
 mysqli_query($conn,$sql);//
?>
 
 
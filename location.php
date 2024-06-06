<?php 
include 'connection.php';
 $lat = $_POST['lat'];
 $long = $_POST['long'];
 $myBrowser = $_POST['myBrowser'];
 $MyIp = $_POST['MyIp'];
 $Device = $_POST['Device'];
 //$ip = $_POST['ip'];
// $b = $_POST['b'];
 $sql = "INSERT INTO guestuser_location(longitude,latitude,browser,device_type,ip_address) values($long,$lat,'$myBrowser','$Device','$MyIp' )";
 mysqli_query($conn,$sql); 
?>
 
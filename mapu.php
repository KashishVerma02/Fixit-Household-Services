<?php 
$uid = $_GET['userid'];
//echo $pid;
include 'connection.php';
$sql = "SELECT registered_user_location.*,registered_user.* FROM registered_user_location ,registered_user  WHERE registered_user.userid=registered_user_location.user___id AND registered_user.userid=$uid ORDER BY registered_user_location.lastdate DESC LIMIT 1";
//SELECT * FROM service_provider_location WHERE provider__id=$pid
                               $result = mysqli_query($conn,$sql);
                              while($row = mysqli_fetch_assoc($result)) {
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8' />
    <title>Location Of Service Provider</title>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src='mapbox-gl.js'></script>
    <link href='mapbox-gl.css' rel='stylesheet' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }

      #map {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 100%;
      }
    </style>  
</head>
<body> 
     
<div id='map'></div>

<script>

mapboxgl.accessToken = 'pk.eyJ1IjoicGxheXNhZmVjbHViIiwiYSI6ImNsYmJpbWYwbDBqMGQzbnBiZm80MmhwemMifQ.1HYX46cjMHrsqWvMxC4oWQ';
 
const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/streets-v9',
  center: ([<?php echo $row['longitude']?>,<?php echo $row['latitude']?>]),
  zoom: 6.3
});
   
 const marker = new mapboxgl.Marker({color: "red",anchor:"right"})
.setLngLat([<?php echo $row['longitude']?>,<?php echo $row['latitude']?>])
.addTo(map);
 
const popup = new mapboxgl.Popup({ closeOnClick: false,anchor:"left" })
.setLngLat([<?php echo $row['longitude']?>,<?php echo $row['latitude']?>])
.setHTML('<h3>Here Is <?php echo $row['uname']?></h3>')
.addTo(map);
 <?php } ?>
</script>

</body>
</html>
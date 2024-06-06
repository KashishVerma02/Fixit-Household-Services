<?php
include("connection.php");
 

 //include 'connection.php';

   //  $lat = $_POST['lat'];
     //$long = $_POST['long'];
     $lat = 23.022505;
     $long=72.5713621;
     $sql = "SELECT * , (3956 * 2 * ASIN(SQRT( POWER(SIN(( $lat - LatOnTable) *  pi()/180 / 2), 2) +COS( $lat * pi()/180) * COS(LatOnTable * pi()/180) * POWER(SIN(( $long - LongOnTable) * pi()/180 / 2), 2) ))) as distance,serviceprovider.*  
         from service_provider_location,serviceprovider where service_provider_location.provider__id=seviceprovider.providerid
         having  distance <= 10 
         order by distance";

     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_assoc($result)) {
     echo $row["provider_name"];  
        }
      
        ?>

  

 
<html>
  <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
   

</head>
<body>
<?php
  $link = mysqli_connect("localhost", "root", "", "householdservices");

  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  if (isset($_POST['query'])) {
      $query = "SELECT * FROM keywords WHERE  keyword_name LIKE '{$_POST['query']}%' LIMIT 100";
      $result = mysqli_query($link, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($res = mysqli_fetch_array($result)) {?>
        <p> 
        <script> function send(a){window.location.href="http://localhost/fix-it/providerlist.php?id="+a;
       // alert(a);
        } </script>  
        <a href="#" onmouseover="send(<?php echo $res['service_id'];?>)"> <?php echo $res['keyword_name'];?>
         </a> </p>
 <?php  }
    } else {
      echo "
      <div class='alert alert-danger mt-3 text-center' role='alert'>
          Service not found
      </div>
      ";
    }
  }
?>
</body>
</html> 
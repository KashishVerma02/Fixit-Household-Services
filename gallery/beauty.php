<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Protfolio Gallery</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel='stylesheet prefetch' href='https://npmcdn.com/basscss@8.0.0/css/basscss.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">
      <img src="../images/logo2.png" height="40" width="100"/> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../index.php">Home <span class="sr-only"> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../providers.php">Service Providers </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../about us/index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../help_center.php">FAQs</a>
        </li>
       </ul> 
    </div> 
  </nav>
  <div class="toolbar mb2 mt2"><br/><br/><br/> 
  <button class="btn fil-cat"  onclick="allgo()">All</button>
  <button class="btn fil-cat"  onclick="fridgego()" >Fridge Repairing</button>
  <button class="btn fil-cat"  onclick="plumbing()" >Plumbing</button>
  <button class="btn fil-cat"  onclick="wiring()" >Electrical</button>
  <button class="btn fil-cat"  onclick="baby()" >Baby sitter</button>
  <button class="btn fil-cat"  onclick="beauty()" >Beutician</button>
  <button class="btn fil-cat"  onclick="old()" >Old age care</button>
</div> 
 
<div id="portfolio" >
   <?php 
include 'connection.php';
$sql = "SELECT * FROM providerservices WHERE serviceid=14";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result)) {
   ?>
  <div class="tile scale-anm web all">
    <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_text']); ?>"  alt="Image" height="150" width="200" />
    <?php } ?>
  </div> 
</div>  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> 
    <script src="js/index.js"></script> 
    <script>
      function allgo()
      {
        window.location.href="index.php";
      }
     function fridgego()
      {
        window.location.href="fridge.php";
      }
      function plumbing()
      {
        window.location.href="plumbing.php";
      }
      function wiring()
      {
        window.location.href="wiring.php";
      }
      function baby()
      {
        window.location.href="baby.php";
      }
      function beauty()
      {
        window.location.href="beauty.php";
      }
      function old()
      {
        window.location.href="old.php";
      }
      </script>
</body>
</html>

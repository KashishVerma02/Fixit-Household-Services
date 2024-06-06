<?php   include 'connection.php';?>
<html>
<head>
  <link rel="stylesheet" href="productpage.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo2.png" height="40" width="100"/> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only"> </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="providers.php">Service Providers </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help_center.php">FAQs</a>
        </li>
       </ul> 
    </div> 
  </nav>
<br><br><br><br>
<div class="container">
<div class="row">
    <div class="col-sm">
        <button class="button-51" role="button" onclick="allrecord()">All</button>
      </div>
    <div class="col-sm">
        <button class="button-51" role="button" onclick="pricerecord()">Price</button>
      </div>
      <div class="col-sm">
        <button class="button-51" role="button" onclick="raterecord()">Rating</button>
      </div> 
      <div class="col-sm">
        <button class="button-51" role="button">City</button>
      </div> 
  </div>
  </div>
 
<div class="container mt-5 mb-1" id="all">
  <div class="d-flex justify-content-left row">
      <div class="col-md-10">
        <form method="post">
      <?php 
                      
                     // session_start();
                         $service = $_GET['id'];
                       
                              //echo $service; 
                             $sql =  "SELECT serviceprovider.providerid,serviceprovider.img_text,serviceprovider.providername,serviceprovider.visit_charge,serviceprovider.description, providerservices.serviceid,AVG(sp_rating.rating) 'ave rating' FROM serviceprovider,providerservices,sp_rating WHERE serviceprovider.providerid=providerservices.provider_id AND serviceprovider.providerid=sp_rating.providerid AND providerservices.serviceid=$service GROUP BY sp_rating.providerid ORDER BY serviceprovider.visit_charge";
                               $result = $conn->query($sql);
                              while($row = mysqli_fetch_assoc($result)) {?>
          <div class="row p-2 bg-white border rounded">
              <div class="col-md-3 mt-1">  <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['img_text']); ?>" class=" img-fluid img-responsive rounded product-image" height="150px" width="220px"/></div>
              <div class="col-md-6 mt-1">
                  <h5>  <?php  echo $row['providername']; ?></h5> 
                  <div class="d-flex flex-row">
                      <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span><?php echo $row['ave rating'];?>%</span> 
                  </div> 
                  <p class="text-justify text-truncate para mb-0">  <?php echo $row['description']; ?> </p>
              </div>
              <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                <h6 class="text-success">Visiting Charges</h6>
                  <div class="d-flex flex-row align-items-center">
                      <h4 class="mr-1">Rs.<?php echo $row['visit_charge']; ?></h4> 
                  </div>
                  <div class="d-flex flex-column mt-4">
                   <script> function send(a,b){window.location.href="http://localhost/fix-it/loginmain.php?id="+a+"&sid="+b;
       // alert(a);
        } function map(a){window.location.href="http://localhost/fix-it/map.php?id="+a;
       // alert(a);
        } </script>  
                   <input type="submit" onmouseover="send(<?php echo $row['providerid']; ?>,<?php echo $service; ?>)" class="btn btn-primary btn-sm" value="More Info" id="info"> <button class="btn btn-outline-primary btn-sm mt-2" onclick="map(<?php echo $row['providerid']; ?>)" type="button">Location</button></div>
              </div>
          </div>
          <?php  } $conn=null;//SELECT serviceprovider.providername, serviceprovider.description,providerservices.serviceid FROM serviceprovider, providerservices WHERE serviceprovider.providerid = providerservices.providerid  ?>
                              </form>
           
      </div>
   </div> 
</div>
 
<footer class="bg-light text-center">
          <!-- Grid container -->
      </br><br/>
            <!-- Section: Social media -->
            <section class="mb-4" >
              <!-- Facebook -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #3b5998;"
                href="https://www.facebook.com/profile.php?id=100089719374545"
                role="button"
                ><i class="fab fa-facebook-f"></i
              ></a>
        
              <!-- Twitter -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #55acee;"
                href="https://twitter.com/Fixit151989It"
                role="button"
                ><i class="fab fa-twitter"></i
              ></a>
        
              <!-- Google -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #dd4b39;"
                href="https://myaccount.google.com/?utm_source=chrome-profile-chooser&pli=1"
                role="button"
                ><i class="fab fa-google"></i
              ></a>
        
              <!-- Instagram -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://www.instagram.com/fixit_599/"
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <!-- Linkedin -->
              <a
        class="btn text-white btn-floating m-1"
        style="background-color:#4DE627;"
        href="tel:9106113352"  
        role="button"
        ><i class="fab fa-whatsapp"></i
      ></a>
        
              <a
                class="btn text-white btn-floating m-1"
                style="background-color:#FD8827;"
                href="emailinvite.php"
                role="button"
                ><i class="fas fa-envelope"></i
              ></a>
            
            </section>
            <!-- Section: Social media -->
         
          <!-- Grid container -->
        
          <!-- Copyright -->
          <div class="text-center p-3" style="background-color:#b0ababa9;font-style:bold;color:#FD8827;font-size:20px;">
            Feedback For
            <a href="https://mdbootstrap.com/" style="color:#21209c;font-style:bold;font-size:20px;"> @Website</a> 
          </div>
          <!-- Copyright -->
        </footer> 
        <script>function allrecord(){ window.location.href="<?php echo "providerlist.php?id=".$service;?>"; }
     function pricerecord(){ window.location.href="<?php echo "pro.php?id=".$service;?>"; }
     function raterecord(){ window.location.href="<?php echo "prorating.php?id=".$service;?>"; }
       </script> 
</body>
</html>
<!-- HTML !-->



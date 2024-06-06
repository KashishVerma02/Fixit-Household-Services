<html>
<head>
    <link rel="stylesheet" href="demo1.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    #search_result p:hover{
    background: #f2f2f2;
  }
    #live_search[type="text"],#search_result {
    width: 80%;
    box-sizing: border-box;
  }
  #search_result p{
    width: 100%;
    margin-left:-80px;
    padding: 7px 10px;
    border: 1px solid #CCCCCC;
    border-top: none;
    cursor: pointer;
  }
 
    </style>
<script type="text/javascript">
        $(document).ready(function () {
            $("#live_search").keyup(function () {
                var query = $(this).val();
                if (query != "") {
                    $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {
                            query: query
                        },
                        success: function (data) {
                            $('#search_result').html(data);
                            $('#search_result').css('display', 'block');
                            $("#live_search").focusout(function () {
                                $('#search_result').css('display', 'none');
                            });
                            $("#live_search").focusin(function () {
                                $('#search_result').css('display', 'block');
                            });
                        }
                    });
                } else {
                    $('#search_result').css('display', 'none');
                }
            });
        });
    </script> 
</head>
<body onload="getLocation()"> 
<div>
  <div class="row">
    <div class="col-lg">
    <nav class="navbar navbar-light bg-light">  
        <form class="container-fluid" method="post" action="providerlist.php">
        
            <a class="navbar-brand" href="#">
          <img src="images/logo2.png" height="70" width="160"/>  </a> 
            <div class="w-75 p-3">
             <input type="text" class="form-control" placeholder="Search for services" aria-label="Username" name="live_search" id="live_search" autocomplete="off" style="margin-left:-80px;margin-top:7px;">
            <div id="search_result"></div>
         </div>    
         
        </form> 
      
      </nav>
  </div></div>
<div class="row">
   <div class="col-lg">
<div class="container">
    
    <div class="box">
        
      <div class="imgBx">
     <img src="imgs/pexels-pixabay-257736.jpg">
      </div>
      <div class="content">
        <div> 
        <?php
        include 'connection.php';
         $sql = "SELECT * FROM keywords WHERE keyword_name='Wiring and Earthing'";
         $result = $conn->query($sql);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid; ?>"> 
        <h2>Wiring and Earthing</h2> 
          <p>All type of wiring services, wiring for home, shop or apartments.
          </p></a> 
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-max-rahubovskiy-6508357 (1).jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql2 = "SELECT * FROM keywords WHERE keyword_name='Fridge Repair'";
         $result = $conn->query($sql2);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid2 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid2; ?>"> 
          <h2>Fridge Repair</h2>
          <p>All typr of fridge repairing, Compressor repairing, Gas refill, Monthly services, maintenence.
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-max-rahubovskiy-7546315.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql1 = "SELECT * FROM keywords WHERE keyword_name='Plumbing'";
         $result = $conn->query($sql1);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid1 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid1; ?>"> 
          <h2>Plumbing</h2>
          <p>All type of plumbing related services, Tap repairing, Focet repairing and Cleaning, Drannage Cleaning.
          </p></a>
        </div>
      </div>
    </div>
    
  </div>
</div>
<div class="col-lg">
  <div class="container">
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-tima-miroshnichenko-6763618.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql1 = "SELECT * FROM keywords WHERE keyword_name='waxing'";
         $result = $conn->query($sql1);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid1 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid1; ?>"> 
          <h2>Waxing</h2>
          <p> All types of waxxing done by professionals with proper hygiene and care
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-john-tekeridis-3212179.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql1 = "SELECT * FROM keywords WHERE keyword_name='facial and massage'";
         $result = $conn->query($sql1);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid1 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid1; ?>"> 
          <h2>Facial and Massage</h2>
          <p>Get massage and facial done by proffessionals and beauty experts
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-emma-bauso-2253832.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql1 = "SELECT * FROM keywords WHERE keyword_name='makeup'";
         $result = $conn->query($sql1);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid1 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid1; ?>"> 
          <h2>Makeup</h2>
          <p>Everyday makeup to bridal makeup everything is available here
          </p></a>
        </div>
      </div>
      
    </div>
    
</div>

  </div>
</div>
<br><br>
<div class="row">
    <div class="col-lg">
<div class="container">
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-bidvine-1249611.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql2 = "SELECT * FROM keywords WHERE keyword_name='furniture making'";
         $result = $conn->query($sql2);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid2 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid2; ?>"> 
          <h2>Furniture Making</h2>
          <p>Best handyman wokers for best furniture and wood work
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-matilda-wormwood-4098786.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql2 = "SELECT * FROM keywords WHERE keyword_name='wooden pest control'";
         $result = $conn->query($sql2);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid2 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid2; ?>"> 
          <h2>Wooden Pest Control</h2>
          <p>Solution for termites and all wood worms
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-eric-mufasa-1350789.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql2 = "SELECT * FROM keywords WHERE keyword_name='furniture repairing'";
         $result = $conn->query($sql2);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid2 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid2; ?>"> 
          <h2>Furniture Repair</h2>
          <p>Repair your broken furniture into a brand new one
          </p></a>
        </div>
      </div>
    </div>
   
  </div>
</div>
<div class="col-lg">
  <div class="container">
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-andrea-piacquadio-3768114.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql2 = "SELECT * FROM keywords WHERE keyword_name='old age care'";
         $result = $conn->query($sql2);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid2 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid2; ?>"> 
          <h2>Old age Care</h2>
          <p>Provide the best care for your elders by the best proffesionals
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-rodnae-productions-5591833.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql2 = "SELECT * FROM keywords WHERE keyword_name='house maid'";
         $result = $conn->query($sql2);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid2 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid2; ?>"> 
          <h2>House Maid</h2>
          <p>House cleaning , work place cleaning, school cleaning, college cleaning
          </p></a>
        </div>
      </div>
    </div>
    <div class="box">
      <div class="imgBx">
        <img src="imgs/pexels-lina-kivaka-1741231.jpg">
      </div>
      <div class="content">
        <div>
        <?php
       // include 'connection.php';
         $sql1 = "SELECT * FROM keywords WHERE keyword_name='baby sitting'";
         $result = $conn->query($sql1);
        while($row = mysqli_fetch_assoc($result)) {
        ?>
        <p><?php $sid1 =  $row['service_id']; }?></p> 
        <a href="providerlist.php?id=<?php echo $sid1; ?>"> 
          <h2>Baby Sitting</h2>
          <p>Expierenced nannys for your child 
          </p></a>
        </div>
      </div>
    </div>
</div>
  </div>
</div>
<div class="row">
  <div class="col-lg">
      <footer class="bg-light text-center ">
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
                href="www.google.com"
                role="button"
                ><i class="fab fa-google"></i
              ></a>
        
              <!-- Instagram -->
              <a
                class="btn text-white btn-floating m-1"
                style="background-color: #ac2bac;"
                href="https://instagram.com/fixit_599?igshid=YmMyMTA2M2Y="
                role="button"
                ><i class="fab fa-instagram"></i
              ></a>
        
              <!-- Linkedin -->
              <a
        class="btn text-white btn-floating m-1"
        style="background-color:#4DE627;"
        href="https://wa.me/message/PMDZQNAZ6RWEK1"  
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
            Sign IN As A
            <a href="loginsp.php" style="color:#21209c;font-style:bold;font-size:20px;"> @Service Provider</a>
            Or 
            <a href="admin/login.php" style="color:#21209c;font-style:bold;font-size:20px;"> @Admin</a>  
          </div>
           
          <!-- Copyright -->
        </footer>  
      </div></div>
</div>
</div>
<script>
       let userAgent = navigator.userAgent;
         let browserName;    
         if(userAgent.match(/chrome|chromium|crios/i)){
             browserName = "chrome";
           }else if(userAgent.match(/firefox|fxios/i)){
             browserName = "firefox";
           }  else if(userAgent.match(/safari/i)){
             browserName = "safari";
           }else if(userAgent.match(/opr\//i)){
             browserName = "opera";
           } else if(userAgent.match(/edg/i)){
             browserName = "edge";
           }else{
             browserName="No browser detection";
           }
         // alert(browserName);
        
var myip;
function getIP(json) { 
        var ip = json.ip; 
        myip= ip;
        console.log(ip);  
     }  
     var device;
const getDeviceType = () => { const ua = navigator.userAgent; if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) { return "tablet"; } if ( /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test( ua ) ) { return "mobile" ; } 
return "desktop" ; };
  device = getDeviceType();
  console.log(device);
     function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
        // CHROME
      }
    function showPosition(position) {
        var lat = position.coords.latitude ;
          var long = position.coords.longitude;
          console.log(lat);
          console.log(long);
           // document.writeln(lat);
           // document.writeln(long);
           $.ajax({
                    type: "POST",
                    url: 'location.php',
                   
                    data :  
                      {
                      lat : lat,
                      long : long,
                      myBrowser : browserName,
                      MyIp : myip,
                      Device : device
                    }
              });
              }
  </script><script type="application/javascript" src="https://api.ipify.org?format=jsonp&callback=getIP"></script>
  
</body>
</html>
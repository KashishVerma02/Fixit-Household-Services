<?php  $provider=$_GET['id']; 
$sid=$_GET['sid']; 
$userid=$_GET['userid'];
include 'connection.php';
$que1 = "SELECT * FROM registered_user WHERE userid=$userid";
$result = $conn->query($que1);
while($res = mysqli_fetch_assoc($result)) {
    $status=$res['per_id'];
    }
     
$sql = "SELECT * FROM providerservices WHERE provider_id=$provider AND serviceid=$sid";
$result = $conn->query($sql);
while($row = mysqli_fetch_assoc($result)) {
    $imgc=$row['img_text'];
   
}
?> 
<html>
<head>
<script src="sweetalert2.all.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <style>
            th{
                text-align:center;
            }
            .pd-wrap {
        padding: 40px 0;
        font-family: 'Poppins', sans-serif;
    }
    .heading-section {
        text-align: center;
        margin-bottom: 20px;
    }
    .sub-heading {
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        display: block;
        font-weight: 600;
        color: #2e9ca1;
        text-transform: uppercase;
        letter-spacing: 2px;
    }
    .heading-section h2 {
        font-size: 32px;
        font-weight: 500;
        padding-top: 10px;
        padding-bottom: 15px;
        font-family: 'Poppins', sans-serif;
    }
    .user-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        position: relative;
        min-width: 80px;
        background-size: 100%;
    }
    .carousel-testimonial .item {
        padding: 30px 10px;
    }
    .quote {
        position: absolute;
        top: -23px;
        color: #2e9da1;
        font-size: 27px;
    }
    .name {
        margin-bottom: 0;
        line-height: 14px;
        font-size: 17px;
        font-weight: 500;
    }
    .position {
        color: #adadad;
        font-size: 14px;
    }
    .owl-nav button {
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        outline: none;
        height: 25px;
    }
    .owl-nav button svg {
        width: 25px;
        height: 25px;
    }
    .owl-nav button.owl-prev {
        left: 25px;
    }
    .owl-nav button.owl-next {
        right: 25px;
    }
    .owl-nav button span {
        font-size: 45px;
    }
    .product-thumb .item img {
        height: 100px;
    }
    .product-name {
        font-size: 22px;
        font-weight: 500;
        line-height: 22px;
        margin-bottom: 4px;
    }
    .product-price-discount {
        font-size: 22px;
        font-weight: 400;
        padding: 10px 0;
        clear: both;
    }
    .product-price-discount span.line-through {
        text-decoration: line-through;
        margin-left: 10px;
        font-size: 14px;
        vertical-align: middle;
        color: #a5a5a5;
    }
    .display-flex {
        display: flex;
    }
    .align-center {
        align-items: center;
    }
    .product-info {
        width: 100%;
    }
    .reviews-counter {
        font-size: 13px;
    }
    .reviews-counter span {
        vertical-align: -2px;
    }
    .rate {
        float: left;
        padding: 0 10px 0 0;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float: right;
        width: 15px;
        overflow: hidden;
        white-space: nowrap;
        cursor: pointer;
        font-size: 21px;
        color:#ccc;
        margin-bottom: 0;
        line-height: 21px;
    }
    .rate:not(:checked) > label:before {
        content: '\2605';
    }
    .rate > input:checked ~ label {
        color: #ffc700;    
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;  
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }
    .product-dtl p {
        font-size: 14px;
        line-height: 24px;
        color: #7a7a7a;
    }
    .product-dtl .form-control {
        font-size: 15px;
    }
    .product-dtl label {
        line-height: 16px;
        font-size: 15px;
    }
    .form-control:focus {
        outline: none;
        box-shadow: none;
    }
    .product-count {
        margin-top: 15px; 
    }
    .product-count .qtyminus,
    .product-count .qtyplus {
        width: 34px;
        height: 34px;
        background: #212529;
        text-align: center;
        font-size: 19px;
        line-height: 36px;
        color: #fff;
        cursor: pointer;
    }
    .product-count .qtyminus {
        border-radius: 3px 0 0 3px; 
    }
    .product-count .qtyplus {
        border-radius: 0 3px 3px 0; 
    }
    .product-count .qty {
        width: 60px;
        text-align: center;
    }
    .round-black-btn {
        border-radius: 4px;
        background: #212529;
        color: #fff;
        padding: 7px 45px;
        display: inline-block;
        margin-top: 20px;
        border: solid 2px #212529; 
        transition: all 0.5s ease-in-out 0s;
    }
    .round-black-btn:hover,
    .round-black-btn:focus {
        background: transparent;
        color: #212529;
        text-decoration: none;
    }
    
    .product-info-tabs {
        margin-top: 25px; 
    }
    .product-info-tabs .nav-tabs {
        border-bottom: 2px solid #d8d8d8;
    }
    .product-info-tabs .nav-tabs .nav-item {
        margin-bottom: 0;
    }
    .product-info-tabs .nav-tabs .nav-link {
        border: none; 
        border-bottom: 2px solid transparent;
        color: #323232;
    }
    .product-info-tabs .nav-tabs .nav-item .nav-link:hover {
        border: none; 
    }
    .product-info-tabs .nav-tabs .nav-item.show .nav-link, 
    .product-info-tabs .nav-tabs .nav-link.active, 
    .product-info-tabs .nav-tabs .nav-link.active:hover {
        border: none; 
        border-bottom: 2px solid #d8d8d8;
        font-weight: bold;
    }
    .product-info-tabs .tab-content .tab-pane {
        padding: 30px 20px;
        font-size: 15px;
        line-height: 24px;
        color: #7a7a7a;
    }
    .review-form .form-group {
        clear: both;
    }
    .mb-20 {
        margin-bottom: 20px;
    }
    
    .review-form .rate {
        float: none;
        display: inline-block;
    }
    .review-heading {
        font-size: 24px;
        font-weight: 600;
        line-height: 24px;
        margin-bottom: 6px;
        text-transform: uppercase;
        color: #000;
    }
    .review-form .form-control {
        font-size: 14px;
    }
    .review-form input.form-control {
        height: 40px;
    }
    .review-form textarea.form-control {
        resize: none;
    }
    .review-form .round-black-btn {
        text-transform: uppercase;
        cursor: pointer;
    }
            </style>
    </head>
    <body onload="getLocation()">
        <div class="pd-wrap">
            <div class="container">
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
          <a class="nav-link" href="about us/index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery/index.php">Gallery</a>
        </li>
       </ul>
      
      <form class="form-inline my-2 my-lg-0">
      <?php
       $que5 = "SELECT * FROM registered_user WHERE userid=$userid";
$result = $conn->query($que5);
while($res = mysqli_fetch_assoc($result)) {?>
      Welcome , <?php echo $res['uname']; }?> &#160;
     <a href="user2.php?id=<?php echo $provider;?>&userid=<?php echo $userid;?>&sid=<?php echo $sid;?>"> <img src="images/USER.png"alt="image" class="img-circle" height="50" width="50"/></a>
      </form> 
    </div> 
  </nav>
                <div class="heading-section"><br/><br/>
                    <h2>Service Provider Details</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider">
                         
                        <?php
                          // $userid=$_GET['userid'];
                            //echo $provider;
                              /*  include 'connection.php';
                                 $sql = "SELECT * FROM providerservices WHERE provider_id=$provider";
                                $result = $conn->query($sql);
                                while($row = mysqli_fetch_assoc($result)) {*/?>
                                <div class="item">
                                    
                                <img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($imgc); ?>" class=" img-responsive rounded"alt="image"/>
                            </div>  
                           
                                                         <?php //} ?>
                                                   </div>
                        <div id="thumb" class="owl-carousel product-thumb" hidden>
                            <div class="item">
                                  <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" />
                            </div>
                            <div class="item">
                                  <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                  <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                            <div class="item">
                                  <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>
                            <div class="item">
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-dtl">
                            <div class="product-info">
                            <?php
                           
                            //echo $provider;
                               // include 'connection.php';
                                 $sql = "SELECT * FROM serviceprovider WHERE providerid=$provider";
                                $result = $conn->query($sql);
                                while($row = mysqli_fetch_assoc($result)) {?>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5> <a
        class="btn text-white btn-floating m-1"
        style="background-color: #FD8827;"
        href="#!"
        role="button"
        ><i class="fas fa-user"></i
      ></a> : <?php echo $row['providername'];?></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5> <a
        class="btn text-white btn-floating m-1"
        style="background-color: #21209c;"
        href="#!"
        role="button"
        ><i class="fas fa-address-card"></i
      ></a> : <?php echo $row['address'];?></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#17BABF;"
        href="#!"
        role="button"
        ><i class="fas fa-envelope"></i
      ></a> : <?php echo $row['provideremailid'];?></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5> <a
        class="btn text-white btn-floating m-1"
        style="background-color:#16E29E;"
        href="#!"
        role="button"
        ><i class="fas fa-mobile-alt"></i
      ></a> : <a href="tel:<?php echo $row['mobile_no'];?>"><?php echo $row['mobile_no'];?></a></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#4DE627;"
        href="#!"
        role="button"
        ><i class="fab fa-whatsapp"></i
      ></a> :  <?php echo $row['whatsapp_no'];?> </h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#274AE6;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook"></i
      ></a> : <?php echo $row['facebookid'];?></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#C01FF0;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a> : <?php echo $row['instaid'];?></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#F01F1F;"
        href="#!"
        role="button"
        ><i class="fas fa-rupee-sign"></i
      ></a> : Rs.<?php echo $row['visit_charge'];?></h5> </label>
                                </div>
                                </div>
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#F0AA1F;"
        href="#!"
        role="button"
        ><i class="fas fa-comment-alt"></i
      ></a> :  <?php echo $row['description'];?></h5> </label>
                                </div>
                                </div>
                                
                                <div class="row">
                            <div class="col ">
	        					<label for="color"><h5><a
        class="btn text-white btn-floating m-1"
        style="background-color:#F0AA1F;"
        href="#!"
        role="button"
        ><i class="fas fa-credit-card"></i
      ></a> :<img src="data:images/jpg;charset=utf8;base64,<?php echo base64_encode($row['g_img_text']); ?>" class=" img-responsive rounded"alt="image" height="150" width="150"/> </h5> </label>
                                </div>
                                </div>
     <?php } //<i class="fa-duotone fa-credit-card"></i>SELECT serviceprovider.providername, serviceprovider.description,serviceprovider.address,serviceprovider.provideremailid,serviceprovider.mobile_no,serviceprovider.whatsapp_no,serviceprovider.facebookid,serviceprovider.istaid,serviceprovider.visit_charge,providerservices.serviceid FROM serviceprovider, providerservices WHERE serviceprovider.providerid = providerservices.provider_id AND providerservices.serviceid=$service?>
 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-info-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Feedback</a>
                          </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                          <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                          <?php
                          // $userid=$_GET['userid'];
                            //echo $provider;
                               // include 'connection.php';
                                 $sql = "SELECT * FROM providerservices WHERE provider_id=$provider AND serviceid=$sid";
                                $result = $conn->query($sql);
                                while($row = mysqli_fetch_assoc($result)) {
                                echo $row['description'];
                                }
                                    ?>
                          </div>
                          <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                              <div class="review-heading">REVIEWS</div>
                              <form class="review-form" method="POST">
                                <div class="form-group">
                                    <label>Your rating</label>
                                    
                                        <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="99.99" />
                  <label for="star5" title="text">5 stars</label>
                  <input type="radio" id="star4" name="rate" value="79.09" />
                  <label for="star4" title="text">4 stars</label>
                  <input type="radio" id="star3" name="rate" value="69.90" />
                  <label for="star3" title="text">3 stars</label>
                  <input type="radio" id="star2" name="rate" value="45.90" />
                  <label for="star2" title="text">2 stars</label>
                  <input type="radio" id="star1" name="rate" value="28.09" />
                  <label for="star1" title="text">1 star</label> 
                                    </div>    
                                </div>
                                <div class="form-group">
                                    <label>Your message</label>
                                    <textarea class="form-control" rows="10" name="msg"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email ID" required autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-md-11">
                                        <div class="form-group">
                                        <select class="form-control" id="pro" name="pro">
                          <option value=""hidden> Select Service Provider</option>
                          <?php 
                             include 'connection.php';
                              $sql = "SELECT * FROM serviceprovider";
                               $result = mysqli_query($conn,$sql);
                               while($row = mysqli_fetch_assoc($result)) {?>
                            <option value="<?php echo $row['providerid']; ?>"><?php echo $row['providername']; }?>       
                          </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" placeholder="Email ID" hidden>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="round-black-btn" value="Submit Review" name="rate1"> 
                            </form>
                          </div>
                          
                    </div>
                   </div> 
            </div>
        </div>
        <?php 
         if(isset($_POST['rate1']))
         {
           // echo "<script>alert('hii')</script>";
            //include 'connection.php';
            $email=$_POST['email'];
            $pro=$_POST['pro'];
            $rate=$_POST['rate'];
            $msg=$_POST['msg'];
            //echo $email,$pro;
        
            $que2 = "SELECT * FROM serviceprovider WHERE providerid=$pro";
            $result1 = mysqli_query($conn,$que2);
            while($res=mysqli_fetch_assoc($result1))
            {
                $pname =  $res['providername'];
                //echo $pname;
            }
            $sql = "INSERT INTO sp_rating(emailid,rating,providerid,providername,feedback_msg) VALUES('$email',$rate,$pro,'$pname','$msg')";
            mysqli_query($conn,$sql);
            echo "<script>
      Swal.fire({
      icon:'success',
      text:'Feedback submited'
      })</script>" ;
         }
        
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="	sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                var slider = $("#slider");
                var thumb = $("#thumb");
                var slidesPerPage = 1; //globaly define number of elements per page
                var syncedSecondary = true;
                slider.owlCarousel({
                    items: 1,
                    slideSpeed: 2000,
                    nav: false,
                    autoplay: false, 
                    dots: false,
                    loop: true,
                    responsiveRefreshRate: 200
                }).on('changed.owl.carousel', syncPosition);
                thumb
                    .on('initialized.owl.carousel', function() {
                        thumb.find(".owl-item").eq(0).addClass("current");
                    })
                    .owlCarousel({
                        items: slidesPerPage,
                        dots: false,
                        nav: true,
                        item: 1,
                        smartSpeed: 200,
                        slideSpeed: 500,
                        slideBy: slidesPerPage, 
                        navText: ['<svg width="18px" height="18px" viewBox="0 0 11 20"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M9.554,1.001l-8.607,8.607l8.607,8.606"/></svg>', '<svg width="25px" height="25px" viewBox="0 0 11 20" version="1.1"><path style="fill:none;stroke-width: 1px;stroke: #000;" d="M1.054,18.214l8.606,-8.606l-8.606,-8.607"/></svg>'],
                        responsiveRefreshRate: 100
                    }).on('changed.owl.carousel', syncPosition2);
                function syncPosition(el) {
                    var count = el.item.count - 1;
                    var current = Math.round(el.item.index - (el.item.count / 2) - .5);
                    if (current < 0) {
                        current = count;
                    }
                    if (current > count) {
                        current = 0;
                    }
                    thumb
                        .find(".owl-item")
                        .removeClass("current")
                        .eq(current)
                        .addClass("current");
                    var onscreen = thumb.find('.owl-item.active').length - 1;
                    var start = thumb.find('.owl-item.active').first().index();
                    var end = thumb.find('.owl-item.active').last().index();
                    if (current > end) {
                        thumb.data('owl.carousel').to(current, 100, true);
                    }
                    if (current < start) {
                        thumb.data('owl.carousel').to(current - onscreen, 100, true);
                    }
                }
                function syncPosition2(el) {
                    if (syncedSecondary) {
                        var number = el.item.index;
                        slider.data('owl.carousel').to(number, 100, true);
                    }
                }
                thumb.on("click", ".owl-item", function(e) {
                    e.preventDefault();
                    var number = $(this).index();
                    slider.data('owl.carousel').to(number, 300, true);
                });
    
    
                $(".qtyminus").on("click",function(){
                    var now = $(".qty").val();
                    if ($.isNumeric(now)){
                        if (parseInt(now) -1> 0)
                        { now--;}
                        $(".qty").val(now);
                    }
                })            
                $(".qtyplus").on("click",function(){
                    var now = $(".qty").val();
                    if ($.isNumeric(now)){
                        $(".qty").val(parseInt(now)+1);
                    }
                });
            });
            </script>
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
            <a href="admin/template/pages/forms/feedbackform.php" style="color:#21209c;font-style:bold;font-size:20px;"> @Website</a> 
          </div>
          <!-- Copyright -->
        </footer> 
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
          console.log(browserName);
          var device;
const getDeviceType = () => { const ua = navigator.userAgent; if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) { return "tablet"; } if ( /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test( ua ) ) { return "mobile" ; } 
return "desktop" ; };
  device = getDeviceType();
  console.log(device);
  var myip;
function getIP(json) { 
        var ip = json.ip; 
        myip= ip;
        console.log(ip);  
     }       function getLocation() {
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
          var uid = "<?php echo $userid; ?>";
          //alert(uid);
           // document.writeln(lat);
           // document.writeln(long);
           $.ajax({
                    type: "POST",
                    url: 'location1.php',
                    data :  
                      {
                      uid : uid,
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
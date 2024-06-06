<?php  $userid=$_GET['userid']; 
$sid=$_GET['sid']; 
$provider=$_GET['id'];
include 'connection.php';
$que1 = "SELECT registered_user.*,registered_user_location.* FROM registered_user,registered_user_location WHERE registered_user.userid=registered_user_location.user___id AND registered_user.userid=$userid ORDER BY registered_user_location.lastdate DESC LIMIT 1";
$result = $conn->query($que1);
while($res = mysqli_fetch_assoc($result)) {
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="user2p.css" rel="stylesheet" />
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="images/usr.jpg" alt="404 User Image Not Found"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $res['uname']; ?>
                                    </h5>
                                    <h6>
                                         Fix - It User
                                    </h6> 
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                   
                        <input type="button" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" onclick="updateuser()"/> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>LINK</p>
                            <a href="logout.php">LogOut</a><br/>
                            <a href="changepsswd.php?id=<?php echo $provider;?>&userid=<?php echo $userid;?>&sid=<?php echo $sid;?>">Change Password</a><br/>
                            <a href="more.php?id=<?php echo $provider;?>&userid=<?php echo $userid;?>&sid=<?php echo $sid;?>">Back</a><br/>
                            <p>Your Location</p>
                            <a href="mapu.php?userid=<?php echo $userid;?>">Last Location Map</a><br/>
                            <a href="">Latitude : <?php echo $res['latitude'];?></a><br/>
                            <a href="">Longitude : <?php echo $res['longitude'];?></a><br/>
                            <a href="">Browser : <?php echo $res['browser'];?></a><br/>
                            <a href="">Public IP : <?php echo $res['ip_address'];?></a><br/>
                            <a href="">Device Type : <?php echo $res['device_type'];?></a><br/>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> 
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <?php echo $res['uname']; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>   <?php echo $res['emailid']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mobile No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>  <?php echo $res['usermono']; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date And Time Of Registration</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> <?php echo $res['udate'];} ?></p>
                                            </div>
                                        </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <script>
            function updateuser()
            {
                window.location.href="updateuser.php?id=<?php echo $provider;?>&userid=<?php echo $userid;?>&sid=<?php echo $sid;?>";
            }
            </script>
</body>
</html>
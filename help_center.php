<!DOCTYPE html>
<html>
<head>
	<title>Responsive Accordion</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="helpcenter.css">
	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
	<div class="container">
		
			<div class="row">
				<div class="col-sm-12 col-md-8">
		<h2>FAQs</h2>
		<div id="accordion">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h5 class="mb-0">
						<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							How do I create an account?
						</button>
					</h5>
				</div>

				<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						To create an account, click on the "Sign Up" button and follow the instructions to complete the registration process.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingTwo">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							How do I search for a service that is near me
						</button>
					</h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					<div class="card-body">
						Search for the service or the shop, a list will appear which can be sorted according to the distance from the user.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingThree">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							How do I reset my password?
						</button>
					</h5>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					<div class="card-body">
						To reset your password, click on the "Forgot Password" link and follow the instructions to reset your password.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingFour">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							How do I change my password
						</button>
					</h5>
				</div>
				<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					<div class="card-body">
						To reset your password, click on the "Change Password" link and follow the instructions to reset your password.
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingFive">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							How do I check my last login location?
						</button>
					</h5>
				</div>
				<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
					<div class="card-body">
						In user profile click on last location map.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingSix">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
							How can I delete my account?
						</button>
					</h5>
				</div>
				<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
					<div class="card-body">
						To delete an account, contact to admin.
					</div>
				</div>
			</div>
			<div class="card">
				<div class="card-header" id="headingSeven">
					<h5 class="mb-0">
						<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
						How do I add my location ?
						</button>
					</h5>
				</div>
				<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
					<div class="card-body">
						Your location will be automatically added once you press "Allow" in the location popup.
					</div>
				</div>
			</div>
		</div></div>
		
					<div class="col-sm-12 col-md-4">
						
						<br><br>
						<h2>Contact Us</h2>
						<form method="post">
						<div class="form-group">
              <label for="name">FIX - IT</label>
            </div>
            <div class="form-group">
              <label for="email">EMAIL:</label> 
              <label>fixit151989@gmail.com</label>
            </div>
            <div class="form-group">
              <label for="message">Contact No:</label>
              <label>+91 9106113352</label>
            </div> 
						</form>
					
				</div>
				</div></div>

				<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "householdservices";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(isset($_POST['helpbtn']))
  {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $sql = "INSERT INTO helpcenter(name,email,message) values('$name','$email','$message')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
  }
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
			
				
			
			</body>
					




					
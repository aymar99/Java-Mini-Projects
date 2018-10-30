<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="use foodies";
              $conn = mysqli_connect("localhost","root","root");
              if(mysqli_query($conn, $sql))
                  {
                  	$sql1="INSERT INTO customer(name,email,password)values('$name','$email','$password')";
                  	if(mysqli_query($conn,$sql1))
                    		header('location: Register.php');    
                  	else
						echo "<script type='text/javascript'>alert('HELLO');</script>";
				}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="./css/style3.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top">
			  <a class="navbar-brand" href="#">Ramya.L</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			  </button>
				  <div class="collapse navbar-collapse" id="navbarText">
					    <ul class="navbar-nav mr-auto">
						      <li class="nav-item ">
						        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="About.html">About us</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="order.php">Order</a>
						      </li>
						      <li class="nav-item">
						        <a class="nav-link" href="Contact.html">Contact</a>
						      </li>
					    </ul>
				  </div>
	</nav><br><br>
	<form class="form-horizontal" action="form.php" method="post">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label" >Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" onchange="ValidateEmail()" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label" >Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" onchange="" required>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="index.php">Login</a>
				         </div>
					</form>
</body>
</html>
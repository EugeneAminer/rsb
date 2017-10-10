<?php
require_once('core/connection.php');
?>
<!DOCTYPE html>
<?php 
	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		
		
		if($email == ""){
			echo "Please enter Email";
		}
		if($password == ""){
			echo "Please enter Password";
		}
			
	if($email && $password ){
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
		$result = $conn->query($sql);
			$count = mysqli_num_rows($result);
			if ($count ==1){
				echo'<script> window.location="dashboard.php"; </script> ';
			}else{
				echo "Please enter the correct credentials";
			}
	}
	}
?>
<html>
	<head>
		<title>Real Startup Boost</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="icon" type="image/png" href="images/favcon.png">
	</head>
	
	<body>
		<section id="header">
			<div id="logo"><p style="margin-top:20px; margin-left:4px; color:#e6e6e8; font-size:30px; font-family:calibri;">Real Startup Boost</p></div>
			<div id="nav">
			<form>
				<ul>
					<li><button id="field" style="background-color:#e6e6e8; width:165px;">Sign Up</button></li>		
					<li><p id="field" style="color:#e6e6e8;">Don't have an account?</p></li>				
				</ul>
			</form>
			</div>
		</section>
		<section id="body-content">
			<div id="create-account" style="border:2px solid grey; margin-top:100px; padding:0px; margin-right:460px; width:29%;">
				<form method="POST">
				<p style="margin-top:10px; margin-left:47px; color:#e6e6e8; font-size:30px; font-family:calibri;">Login To Your Account</p>
					<input id="field" type="email" name="email" value="Email"  style="background-color:#e6e6e8; width:365px;" ><br/>
					<input id="field" type="password" name="password" value="Password" style="background-color:#e6e6e8; width:365px;" ><br/>
					<button id="field" name="login" style="background-color:#e6e6e8; width:265px; margin-left:58px;">Login</button>
				</form>
			</div>
		</section>
		<section id="footer">
						<p style="margin:0px; padding-top:10px; color:#e6e6e8; font-size:15px; font-family:calibri;text-align:center;">&copy rsb: 2017</p>
		</section>
	</body>

</html>
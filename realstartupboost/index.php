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
<?php 
	if(isset($_POST['signup'])){
		$firstname=$_POST['firstname'];
		$surname=$_POST['surname'];
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$role=$_POST['role'];
		
		
		if($firstname == ""){
			echo "Please enter Firstname";
		}
		if($surname == ""){
			echo "Please enter Surname";
		}
		if($email == ""){
			echo "Please enter Email";
		}
		if($password == ""){
			echo "Please enter Password";
		}
		if($age == ""){
			echo "Please enter Age";
		}
		if($gender == ""){
			echo "Please enter Gender";
		}
		if($role == ""){
			echo "Please enter Role";
		}
		
		
		
	if($firstname && $surname && $email && $password && $age && $gender && $role){
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = $conn->query($sql);
			$count = mysqli_num_rows($result);
			if ($count ==1){
				echo "The user email already exists";
			}else
				$sql="INSERT INTO user (id,firstname,surname,email,password,age,gender,role) VALUES ('','$firstname','$surname','$email','$password','$age','$gender','$role')";
				if (mysqli_query($conn, $sql)){
					echo'<script> window.location="login.php"; </script> ';
				}
				
			}
	}
?>
<html>
	<head>
		<title>Uniconnect</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="icon" type="image/png" href="images/favcon.png">
	</head>
	
	<body>
		<section id="header">
			<div id="logo"><p style="margin-top:20px; margin-left:4px; color:#e6e6e8; font-size:30px; font-family:calibri;">Uniconnect</p></div>
			<div id="nav">
			<form method="POST">
				<ul>
					<li><a id="field" style="color:#e6e6e8;">Forgotten Password?</a></li>	
					<li><button type="submit" id="field" name="login" style="background-color:#e6e6e8; width:125px;">Login</button></li>
					<li><input type="password" id="field" name="password" value="Password" style="background-color:#e6e6e8;"></li>	
					<li><input type="text" id="field" name="email" value="Email" style="background-color:#e6e6e8;"></li>
				</ul>
			</form>
			</div>
		</section>
		<section id="body-content" >
			<div id="create-account">
				<form method="POST" >
				<p style="margin-top:10px; color:#e6e6e8; font-size:30px; font-family:calibri;">Create An Account</p>
					<input id="field" type="text" name="firstname" value="Firstname" style="background-color:#e6e6e8;" >
					<input id="field" type="text" name="surname" value="Surname" style="background-color:#e6e6e8;" ><br/>
					<input id="field" type="email" name="email" value="Email"  style="background-color:#e6e6e8; width:365px;" ><br/>
					<input id="field" type="password" name="password" value="Password" style="background-color:#e6e6e8; width:365px;" ><br/>
					<input id="field" type="text" name="age" value="Age" style="background-color:#e6e6e8;" ><br/>
					 <div id="gender">
					 <p style="margin-top:10px; color:#e6e6e8; font-size:15px; font-family:calibri;">Choose Your Gender</p>
						Male<input type="radio" name="gender" value="Male">
						Female<input type="radio" name="gender" value="Female"><br/>
					 </div>
					 <div id="role">
					 <p style="margin-top:10px; color:#e6e6e8; font-size:15px; font-family:calibri;">Type In Your Course</p>
						<input id="field" type="text" name="firstname" value="Course" style="background-color:#e6e6e8;" >
					 </div>
					<button id="field" name="signup" style="background-color:#e6e6e8; width:265px;">Sign Up</button>
				</form>
			</div>
		</section>
		<section id="footer">
						<p style="margin:0px; padding-top:10px; color:#e6e6e8; font-size:15px; font-family:calibri;text-align:center;">&copy uniconnect: 2017</p>
		</section>
	</body>

</html>
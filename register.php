<?php
session_start();
require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Sign In Page</title>
<link rel="stylesheet" href="css/st.css">
<link  rel="shortcut icon" href="images/uicon.jpg" type="image/png">
</head>
<body style="background-color: #17202A ">
<br><br><br><br><br>
	<div id="main-wrapper">
	<center><h2> Sign Up Form</h2></center>
		<form   class="myform" action="register.php" method="post">
			<div class="imgcontainer">
				<img src="images/uicon.jpg" alt="uicon" class="uicon">
			</div>
			<div class="inner_container">
				<label><b>User Name</b></label>
				<input type="txt" placeholder="Type your Name" name="un" required>
				<label><b>E-mail ID</b></label>
				<input type="e-mail" placeholder="Type your e-mail id" name="em" required>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="pwd" required>
				<label><b>Confirm Password</b></label>
				<input type="password" placeholder="Confirm Password" name="cpwd" required>
				<label><b>Mobile Number</b></label>
				<input type="number_format" placeholder="Enter your Number" name="num" required maxlength="10">
				<a href=""><button  name="submit"  class="login_button" id="signup" type="submit">SUBMIT </button><br>
				<a href="index.php"><button type="button" class="back_btn">BACK</button></a>
			</div>
		</form>
<?php
if(isset($_POST['submit']))
{
$con=connect();
$un=$con->real_escape_string($_POST['un']);
$em=$con->real_escape_string($_POST['em']);
$num=$con->real_escape_string($_POST['num']);
$psd=$con->real_escape_string($_POST['pwd']);
$cpsd=$con->real_escape_string($_POST['cpwd']);
			if($psd==$cpsd)
				{
					$apn=rand(100000,999999);
	$sql= "INSERT into sign VALUES('" . $un . "','". $em ."','". $psd."','". $num."','".$apn."')";
				   $success = $con->query($sql);
						if (!$success) {
							die("Couldn't enter data: ".$con->error);
										}
										else{
										echo '<script type="text/javascript">alert("User Registered & Application Number Generated ")</script>';
										$_SESSION['em'] = $em;
								        $_SESSION['psd'] = $psd;
										header("location:Wel.php");
										}
				}
				else{
					echo '<script type="text/javascript">alert("Enter valid password")</script>';
				}

}
?>
</body>
</html>
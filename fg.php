<?php
session_start();
require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Pass Online</title>
        <link rel="stylesheet" href="css/st.css">
        <link  rel="shortcut icon" href="images/uicon.jpg" type="image/png">
</head>
<body style="background-color: #17202A ">
<br><br><br><br><br>
	<div id="main-wrapper">
	<center><h1>TRAVEL   PASS   ONLINE</h1></center>
	<center> <h3>Forgot Password </h3></center>
			<div class ="imgcontainer">
				<img src="images/uicon.jpg" alt="uicon" class="uicon">
			</div>
		<form action="fg.php" method="post">
			<div class="inner_container">
				<label><b>Application Number</b></label>
				<input type="number_format"  name="apn" required>
				<label><b>E-mail Id</b></label>
				<input type="txt"  name="em" required>
				<button type="submit" name="fg" class="register_btn">SUBMIT</button></a>
				<?php
				if(isset($_POST['fg'])){
$apn=$_POST['apn'];
$em=$_POST['em'];
$con=connect();
$sql="SELECT un from sign where em='$em' and  apn='$apn'";
			$r=mysqli_query($con,$sql) or die(mysqli_error($con));
			$count=mysqli_num_rows($r);
      if($count == 1) {
         $_SESSION['em'] = $em;
		 $_SESSION['apn']=$apn;
		 header("location:wel.php");
	  }
	  else{
         echo '<script type="text/javascript">alert("Invalid Employee Id and Application Number")</script>';
}
}
?>
			</div>
		</form>
</body>
</html>

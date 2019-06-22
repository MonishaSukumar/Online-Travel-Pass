<?php
session_start();
require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Pass Online</title>
        
        <link  rel="shortcut icon" href="images/uicon.jpg" type="image/png">
		<link rel="stylesheet" href="css/st.css">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script>

            function showPass()
            {
                var pass = document.getElementById('pass');
                if(document.getElementById('check').checked)
                {
                    pass.setAttribute('type','text');
                }else{
                    pass.setAttribute('type','password');
                }
            }

        </script>
</head>
<body style="background-color: #17202A ">
<br><br><br><br><br>
	<div id="main-wrapper">
	<center><h1>TRAVEL   PASS   ONLINE</h1></center>
	<center> <h3>login page </h3></center>
			<div class ="imgcontainer">
				<img src="images/uicon.jpg" alt="uicon" class="uicon">
			</div>
		<form action="index.php" method="post">
		
			<div class="inner_container">
				<label><b>E-mail ID</b></label>
				<input type="e-mail" placeholder="e-mail id" name="em" required/>
				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" id="pass" name="psd" required/><br>
				<input type="checkbox" id="check" class="ch" align="middle" onclick="showPass()"/><label><b class="ch" align="middle">Show Password<b></label><br>
				<a href="fg.php">    Forgot password ? </a> <br>
				<a href="wel.php"><button class="login_button" name="login" type="submit"/>LOG IN</button></a>
				<a href="register.php"><button type="button" class="register_btn">SIGN UP</button></a>
			</div>
			</div>
		</form>
</body>
</html>
<?php
if(isset($_POST['login'])){
$con=connect();
$em=$_POST['em'];
$psd=$con->real_escape_string(  $_POST['psd']);
			$sql="SELECT un from sign where em='$em' and  psd='$psd'";
			$r=mysqli_query($con,$sql) or die(mysqli_error($con));
			$count=mysqli_num_rows($r);
      if($count == 1) {
         $_SESSION['em'] = $em;
		 $_SESSION['psd']=$psd;
		 header("location:wel.php");
	  }
	  else{
         echo '<script type="text/javascript">alert("Invalid E-mail Id and Password")</script>';
}

}
?>
<?php
session_start();
require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Pass Online</title>
<link  rel="shortcut icon" href="images/uicon.jpg" type="image/png">
<link rel="stylesheet" href="css/otpstyle.css">
</head>
<body style="background-color: #17202A ">
 <div class="lg">
   <img src="images/uicon.jpg" class="ui">
   	   <center><h1 style="font-size:40px" >TRAVEL   PASS   ONLINE</h1></center> 
	  <form>
	    <div class="rd">
				<a href="bsr.php"><img src="images/bus.jpg" width="120px" height="80px" name="pic" align="middle"></a><br>Bus<br>
				<a href="tsr.php"><img src="images/train.jpg" width="120px" height="80px" name="pic" align="middle"></a>
				<br>Train<br>
				<a href="msr.php"><img src="images/metro.jpg" width="120px" height="80px" name="pic" align="middle"></a>
				<br>Metro<br>
				<a href="register.php"><button type="button" class="register_btn">Next</button></a>
		</div>
     </form>	 
 </div>
	
</body>
</html>
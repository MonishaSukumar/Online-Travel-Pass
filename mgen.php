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
	<center> <h3>Generate Pass</h3></center>
			<div class ="imgcontainer">
				<img src="images/uicon.jpg" alt="uicon" class="uicon">
			</div>
<form action="pdfm.php"method="get" class="fo">
<B>Application Number</B>
<input type="number_format"  name="apn"><button name="s" class="register_btn" type="Submit">Submit</button>
</body>
</html>

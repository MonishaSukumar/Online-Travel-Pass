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
	<center> <h3>User View</h3></center>
			<div class ="imgcontainer">
				<img src="images/uicon.jpg" alt="uicon" class="uicon">
			</div>

<form action="wel.php"method="post" class="fo">
<button type="Submit" name="view" class="login_button">View Basic Details</button>
<br><center>
<?php
if(isset($_POST['view'])){
$con=connect();
$em=$_SESSION['em'];
			$sql="SELECT * from sign where em='$em'";
            $result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Email Id: " . $row["em"]."<br>";
		echo " User Name: " . $row["un"]."<br>" ;
		echo "Application Number: " . $row["apn"]."<br>";
    }
} else {
    echo "0 results";
}
}
?></center>
<a href="select.php"><button type="button"  class="login_button">Select Mode of Travel </button></a>
<a href="logout.php"><button type ="button" class="back_btn">Log out </button></a><br><br>
</form>
</body>
</html>

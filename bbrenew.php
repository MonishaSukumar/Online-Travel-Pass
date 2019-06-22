<?php
session_start();
require_once('dbconfig/config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Bus Pass Renewal</title>
<link rel="stylesheet" href="css/sslc.css">
<link  rel="shortcut icon" href="images/Bus.jpg" type="image/png">
</head>
<body style="background-color: #17202A ">
<table align="center" cellpadding="2" cellspacing="2"  id="application" width="500px">
	<tbody><tr>
										<td align="center"><img src="images/Bus.jpg" width="120px" height="80px" align="middle"></td>	
										<td colspan="4" align="center" style="font-size:45px" class="tit"><b>BUS  PASS   ONLINE</b> </font> <br>  </td>
									</tr>
									<tr>
										<td colspan="4" align="Middle" ><h2 class="ti">  Bus Pass Renewal </h2></td>
									</tr>
									</tbody></table>
	<div id="d2">
	<button class="button"><center><h1 style="font-size:18px"><b>Renewal Details</b></h1></center></button><br>
	<br>
		<form action="bbrenew.php" method="post" >
	<a href=""><button  type="submit" name="s" align="center">View Details</button></a>
	<?php
if(isset($_POST['s'])){
$con=connect();
$em=$_SESSION['em'];
			$sql="SELECT * from Busb10 where em='$em'";
            $result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<br>";
        echo "Application Number: " . $row["apn"]."<br><br>";
		echo "<u><b><h3>Student Details <br></H3></u></b>";
		echo "Name : " . $row["un"]."<br>";
		echo "Aadhar Number :" . $row["aad"]."<br>";
		 echo "E-Mail ID: " . $row["em"]."<br>";
		 echo "<u><b><h3><br>Route Details<br></h3></u></b>";
		echo "From: "  . $row["from"]."<br>";
		echo "To:"  . $row["to"]."<br>";
		echo "Pass duration: "  . $row["m"]." months.<br>";
		echo "Pass Generated Date: "  . $row["dat"]."<br>";
		echo "Renew Date:"  . $row["renewd"]."<br>";
		echo "Fare:  Rs." . $row["fare"]."<br>";
    }
}
	else {
    echo "No User Found ";
}

}
?></form>
<form action="bbrenew.php" method="post" >
<br><button  type="submit" name="r" align="center">Renewal</button></a>
<?php
if(isset($_POST['r'])){
$con=connect();
$em=$_SESSION['em'];
			$sql="SELECT * from Busb10 where em='$em'";
            $result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $n=$row["apn"];
		 $kms=$row["km"];
		 $mo=$row["m"];
		 $r=$row["renewd"];
$rd=$row["renewd"];
}
}
if($kms=='10'){
			 if($mo=='3'){
			 $fare="200";
			$rd = date('Y-m-d', strtotime("+3 months", strtotime($rd)));
			 }
			 if($mo=='6'){
				 $fare="430";
				 $rd = date('Y-m-d', strtotime("+6 months", strtotime($rd)));
			 }
			 if($mo=='12'){
				 $fare="750";
				 $rd = date('Y-m-d', strtotime("+12 months", strtotime($rd)));
		 }}
		   if($kms==20){
			 if($mo==3){
			 $fare="250";
			 $rd = date('Y-m-d', strtotime("+3 months", strtotime($rd)));
			 }
			 if($mo==6){
				 $fare="580";
				 $rd = date('Y-m-d', strtotime("+6 months", strtotime($rd)));
			 }
			 if($mo==12){
				 $fare="840";
				 $rd = date('Y-m-d', strtotime("+12 months", strtotime($rd)));
		 }}
		   if($kms==30){
			 if($mo==3){
			 $fare="1000";
			 $rd = date('Y-m-d', strtotime("+3 months", strtotime($rd)));
			 }
			 if($mo==6){
				 $fare="1800";
				 $rd = date('Y-m-d', strtotime("+6 months", strtotime($rd)));
			 }
			 if($mo==12){
				 $fare="2500";
				 $rd = date('Y-m-d', strtotime("+12 months", strtotime($rd)));
		 }}
$con=connect();
$em=$_SESSION['em'];
			$sq="Update Bus set renewd='$rd' where em='$em'";
			$s="Update Bus set py='0' where em='$em'";
            $result = $con->query($sq);
			 $r = $con->query($s);
if ($result && $r) {
	echo "<br><br> Renewal Updated  Successfully<br>";
}
else{
	echo '<script type="text/javascript">alert(" Renewal Updated  failed")</script>';
}
$s="SELECT * from Bus where em='$em'";
            $result = $con->query($s);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<br>";
        echo "Application Number: " . $row["apn"]."<br><br>";
		echo " Extended Pass duration: ". $row["m"]." months.<br>";
		echo "Extented Renew Date:"  . $row["renewd"]."<br>";
		echo " New Fare:  Rs." . $row["fare"]."<br>";
    }
}
	else {
    echo "No User Found ";
}



}
?>
<br><a href="paybb.php"><center> If Renew updated successfully proceed to payment</center></a></body>
<br><a href="bsr.php"><center>  Back </center></a></body>
</div>
     </form>
</body>
</html>
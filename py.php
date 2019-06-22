
<html>
<head>
<center> <h1>Payment Module<h1>
<h3>Debit Card</h3>
</center>
</head>
<body>
<center><h1></h1><br><br>
<form action="py.php"method="post" class="fo">
<button type="Submit" name="view" >View Account Details</button>
<button type="Submit" name="ppy"> Proceed to Payment</button>
<a href="logoutbnk.php"><button type="button" name="d">Logout</button></a>
<?php
session_start();
require_once('dbconfig/config.php');
if(isset($_POST['view'])){
$con=connect();
$cn=$_SESSION['cn'];
$c="create view from metro,bnk";
			$sql="SELECT * from bnk  where cn='$cn' ";
            $result = $con->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3><br><b>Card Number:</b> " . $row["cn"]."<br></h3>";
		echo "<h3><b>Name on Card:</b> " . $row["nc"]."<br></h3>";
	    echo "<h3>Account Balance: Rs. " . $row["rs"]."<br></h3>";
}}
else{
	echo "error in database";
}
}

?>
<?php
require_once('dbconfig/config.php');
if(isset($_POST['ppy'])){
$con=connect();
$cn=$_SESSION['cn'];
$sql="SELECT * from bnk  where cn='$cn' ";
            $result = $con->query($sql);
if ($result->num_rows ==1) { 
$ro= $result->fetch_assoc();
    if($ro!== null){
		$c=$ro['rs'];
		$d=$ro['em'];
			$sql="SELECT * from metro  where em='$d'" ;
            $r = $con->query($sql);
			
			
			if ($r->num_rows > 0) {
    while($row = $r->fetch_assoc()) {
		echo "<h3><br><b>Amount  Paid: Rs.</b> " . $row["fare"]."<br></h3>";
		$b=$row["fare"];
}}	
 else {
    echo "no  results";
}
			//echo $b."<br>";
			//echo $c."<br>";
			$c=$c-$b;
			//echo $c."<br>";
			$sq="Update bnk set rs='$c' where em='$d'";
            $result = $con->query($sq);
			$s="Update metro set py='1' where em='$d'";
			$re = $con->query($s);
if ($result & $re) {
	echo "<br><br> Payment is Paid Successfully<br>";
}
else{
	echo '<script type="text/javascript">alert("Payment failed")</script>';
}
			echo "<h3><br><b>Amount  Balance: Rs.</b> " .$c."<br></h3>";
}}
else {
    echo "no  results";
}}
?>

</form></center>
</body>
</html>
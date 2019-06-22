<?php
session_start();
require_once('dbconfig/config.php');
?>
<htmL>
<head>
<style>
.fo{
	border-radius : 20px;
	background-color: white;
	border: 3px solid #000000;
	width: 500px;
	margin: 0 auto;
	margin-bottom:20px;
	font-weight:bold;
	font-size:15px;
	padding:10px;
}
}
</style>
</head>
<body>
<div class="fo">
<?php
if(isset($_POST['s'])){
$con=connect();
$em=$_SESSION['em'];
			$sql="SELECT * from busa10 where em='$em'";
            $result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "<br>";
        echo "Application Number: " . $row["apn"]."<br><br>";
		echo "<u><b><h3>Student Details <br></H3></u></b>";
		echo "Name : " . $row["un"]."<br>";
		echo "Father's/Guardian Name: " . $row["fn"]."<br>" ;
		echo "Date Of Birth : " . $row["dob"]."<br>";
		echo "Gender : " . $row["gen"]."<br>";
		echo "Age : " . $row["age"]."<br>";
		echo "Aadhar Number :" . $row["aad"]."<br>";
		 echo "E-Mail ID: " . $row["em"]."<br>";
		 		 echo "<u><b><h3><br>Residential Address<br></h3></u></b>";
		 echo "Address :   " . $row["addr"]."<br>";
		 echo "City  :  " . $row["cy"]."<br>";
		 echo "Area :  " . $row["tk"]."<br>";
		 echo "District :  " . $row["ds"]."<br>";
		  echo "Pin  :  " . $row["pin"]."<br>";
		   echo "<u><b><h3><br>Institution Details<br></h3></B></u>";
		    echo "Institution Name : " . $row["ina"]."<br>";
		 echo "Address :  "  . $row["iaddr"]."<br>";
		 echo "City  :  "  . $row["icy"]."<br>";
		 echo "Area :  "  . $row["itk"]."<br>";
		 echo "District :  "  . $row["ids"]."<br>";
		  echo "Pin  :  "  . $row["ipin"]."<br>";
		 echo "<u><b><h3><br>Route Details<br></h3></u></b>";
		echo "From: "  . $row["from"]."<br>";
		echo "To:"  . $row["to"]."<br>";
		echo "Pass duration: "  . $row["m"]." months.<br>";
		echo "Pass Generated Date: "  . $row["dat"]."<br>";
		echo "Renew Date:"  . $row["renewd"]."<br>";
		echo "Fare:  Rs." . $row["fare"]."<br>";
		 echo "<u><b><h3><br>Payment Details<br></h3></u></b>";
		 $p=$row["py"];
		 if($p){
		 echo " Payment Paid";}
			 else{ 
			 echo "Payment Not yet paid";
		 }
    }
}
	else {
    echo "No User Found ";
}

}
?></div>
<br><a href="bsb.php"><center> Back To Bus pass Home page </center></a></body>
<br><a href="payba.php"><center> Payment not paid proceed to pay</center></a></body>

</html>
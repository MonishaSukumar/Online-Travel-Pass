<?php
session_start();
require_once('dbconfig/config.php');
?>
<html>
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
	margin-top:20px;
}
}
</style>
<center><br><br><br><BR><br><BR><br><BR> <h1>Payment Module<h1></center>
</head>
<body><form action="payt.php" method="post" class="fo">
<center>
<h3>Debit Card</h3>
Name on Card
<input type="text"  name="nc" required><br><br>
Card Number
<input type="number_format"  name="cn" required  maxlength="16"><br><br>
Expiration Date
<select name="m" required>
<option values="1">1</option>
<option values="2">2</option>
<option values="3">3</option>
<option values="4">4</option>
<option values="5">5</option>
<option values="6">6</option>
<option values="7">7</option>
<option values="8">8</option>
<option values="9">9</option>
<option values="10">10</option>
<option values="11">11</option>
<option values="12">12</option>
</select>
<select name="y" required>
<option values="2022">2022</option>
<option values="2023">2023</option>
<option values="2024">2024</option>
<option values="2025">2025</option>
<option values="2026">2026</option>
<option values="2027">2027</option>
<option values="2028">2028</option>
<option values="2029">2029</option>
<option values="2030">2030</option>
<option values="2031">2031</option>
<option values="2032">2032</option>
<option values="2033">2033</option>
<option values="2034">2034</option>
<option values="2035">2035</option>
<option values="2036">2036</option>
<option values="2037">2037</option>
<option values="2038">2038</option>
</select>
CVV <input type="number_format" name="cvv" size="3"required maxlength="3"><br><br>
<button type="submit" name="login"> Continue</button></a></center>
</form>
</body>
</html>
<?php
if(isset($_POST['login'])){
$con=connect();
$cn=$_POST['cn'];
$nc=$_POST['nc'];
$m=$_POST['m'];
$yr=$_POST['y'];
$cvv=$con->real_escape_string($_POST['cvv']);
			$sql="SELECT * from bnk where cn='$cn' and cvv='$cvv' and m='$m'and y='$yr'and nc='$nc'  ";
			$r=mysqli_query($con,$sql) or die(mysqli_error($con));
			$count=mysqli_num_rows($r);
      if($count == 1) {
         $_SESSION['cn'] = $cn;
		 $_SESSION['em']=$em;
		 header("location:pyt.php");
	  }
	  else{
         echo '<script type="text/javascript">alert("Invalid  User")</script>';
}

}
?>
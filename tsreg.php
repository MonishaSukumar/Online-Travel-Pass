<?php
session_start();
require_once('dbconfig/config.php');
if(isset($_POST['submit']))
{
$con=connect();
$un=$con->real_escape_string($_POST['un']);
$fn=$con->real_escape_string($_POST['fn']);
$dob=$con->real_escape_string($_POST['dob']);
$gen=$con->real_escape_string($_POST['gen']);
$age=$con->real_escape_string($_POST['age']);
$aad=$con->real_escape_string($_POST['aad']);
$em=$con->real_escape_string($_POST['em']);
$apn=$con->real_escape_string($_POST['apn']);
$ds=$con->real_escape_string($_POST['ds']);
$tk=$con->real_escape_string($_POST['tk']);
$cy=$con->real_escape_string($_POST['cy']);
$addr=$con->real_escape_string($_POST['addr']);
$pin=$con->real_escape_string($_POST['pin']);
$ina=$con->real_escape_string($_POST['ina']);
$ids=$con->real_escape_string($_POST['ids']);
$itk=$con->real_escape_string($_POST['itk']);
$icy=$con->real_escape_string($_POST['icy']);
$iaddr=$con->real_escape_string($_POST['iaddr']);
$ipin=$con->real_escape_string($_POST['ipin']);
$from=$con->real_escape_string($_POST['from']);
$to=$con->real_escape_string($_POST['to']);
$km=$con->real_escape_string($_POST['km']);
$m=$con->real_escape_string($_POST['m']);
$dat=$con->real_escape_string($_POST['dat']);
$py=0;
$renewd=$dat;
         if(($km)<='30'){
		 if($km=='10'){
			 if($m=='3'){
			 $fare="200";
			$renewd = date('Y-m-d', strtotime("+3 months", strtotime($renewd)));
			 }
			 if($m=='6'){
				 $fare="400";
				 $renewd = date('Y-m-d', strtotime("+6 months", strtotime($renewd)));
			 }
			 if($m=='12'){
				 $fare="600";
				 $renewd = date('Y-m-d', strtotime("+12 months", strtotime($renewd)));
		 }}
		   if($km==20){
			 if($m==3){
			 $fare="250";
			 $renewd = date('Y-m-d', strtotime("+3 months", strtotime($renewd)));
			 }
			 if($m==6){
				 $fare="350";
				 $renewd = date('Y-m-d', strtotime("+6 months", strtotime($renewd)));
			 }
			 if($m==12){
				 $fare="600";
				 $renewd = date('Y-m-d', strtotime("+12 months", strtotime($renewd)));
		 }}
		   if($km==30){
			 if($m==3){
			 $fare="350";
			 $renewd = date('Y-m-d', strtotime("+3 months", strtotime($renewd)));
			 }
			 if($m==6){
				 $fare="780";
				 $renewd = date('Y-m-d', strtotime("+6 months", strtotime($renewd)));
			 }
			 if($m==12){
				 $fare="1000";
				 $renewd = date('Y-m-d', strtotime("+12 months", strtotime($renewd)));
		 }}}
		 else{
			 echo '<script type="text/javascript">alert("Invalid Submission of data")</script>';
		 }
	$sql= "INSERT into train VALUES('" . $un . "','" . $fn . "','". $dob ."','". $gen ."','". $age ."','".$aad."','" . $em. "','". $apn."','".$ds."','". $tk."','".$cy."',
	'" . $addr. "','".$pin."','" . $ina . "','".$ids."','". $itk."','".$icy."','" . $iaddr. "','".$ipin."','". $from."','".$to."','" . $km. "','".$m."','".$fare."','".$dat."','".$renewd."','".$py."')";
				   $success = $con->query($sql);
						if (!$success) {
							die("Couldn't enter data: ".$con->error);
										}
										else{
										echo '<script type="text/javascript">alert("Registeration for Train Pass is Successfull")</script>';
										header("location:tss.php");
										}
										}

			?>
<!DOCTYPE html>
<html>
<head>
<title>Train Pass Registeration Below 10th</title>
<link rel="stylesheet" href="css/sslc.css">
<link  rel="shortcut icon" href="images/Train.jpg" type="image/png">
</head>
<body style="background-color: #17202A ">
<table align="center" cellpadding="2" cellspacing="2"  id="application" width="500px">
	<tbody><tr>
										<td align="center"><img src="images/Train.jpg" width="120px" height="80px" align="middle"></td>	
										<td colspan="4" align="center" style="font-size:45px" class="tit"><b>TRAIN   PASS   ONLINE</b> </font> <br>  </td>
									</tr>
									<tr>
										<td colspan="4" align="Middle" ><h2 class="ti"> Student Train Pass Application  </h2></td>
									</tr>
									</tbody></table>
									
	<table><tr><td>
	<div id="d2">
	<button class="button"><center><h1 style="font-size:18px"><b>Student Details</b></h1></center></button><br>
	<br>
		<form action="tsreg.php" method="post" >
				<br><b>Name </b>
				<input type="text"  name="un" required>
				<br><br><b> Father's/Guardian Name </b>
				<input type="text"  name="fn" required><br>
				<br><label><b> Date Of Birth </b></label>
				<input type="Date"  name="dob" required>
				<br><br><label><b>Gender</b></label>
				<input type="radio" name="gen" value="Male">Male
				<input type="radio"name="gen" value="Female">Female
				<br><br>
				<b> Age </b>
				<input type="text" placeholder="" name="age"> 
				<br><br><b> Aadhar Number </b>
				<input type="number_format" placeholder="" name="aad" required maxlength="12" size="20"><br><br>
				<b> E-mail ID </b>
				<input type="e-mail"  name="em" required  size="30"><br><br>
				<b> Application Number </b>
				<input type="number_format"  name="apn" required maxlength="6"><br><br>
	</div></td><td>
	<div id="d1">
	<button class="button"><center><h1 style="font-size:18px"><b>Residential Address Details</b></h1></center></button><br>
	<br>
				<label><b>District</b></label>
				<select  class="dis"  name="ds">
				<option>--Select--</option>
				<option value="Ariyalur">Ariyalur</option>
				<option value="Chennai" >Chennai</option>
				<option value="Coimbatore">Coimbatore </option>
				<option value="Cuddalore">Cuddalore </option>
				<option value="Dharmapuri">Dharmapuri</option>
				<option value="Dindigul">Dindigul</option>
				<option value="Erode">Erode</option>
				<option value="Kancheepuram">Kancheepuram</option>
				<option value="Kanyakumari">Kanyakumari</option>
				<option value="Karur">Karur</option>
				<option value="Krishnagiri">Krishnagiri </option>
				<option value="Madurai">Madurai</option>
				<option value="Nagapattinam">Nagapattinam</option>
				<option value="Namakkal">Namakkal</option>
				<option value="Perambalur ">Perambalur </option>
				<option value="Pudukottai">Pudukottai</option>
				<option value="Ramanathapuram">Ramanathapuram</option>
				<option value="Salem">Salem</option>
				<option value="Sivagangai">Sivagangai</option>
				<option value="Thanjavur"> Thanjavur</option>
				<option value="Theni">Theni</option>
				<option value="The Nilgiris "> The Nilgiris </option>
				<option value="Thirunelveli"Thirunelveli</option>
				<option value="Thiruvallur ">Thiruvallur </option>
				<option value="Thiruvannamalai">Thiruvannamalai</option>
				<option value="Thiruvarur">Thiruvarur</option>
				<option value="Tiruppur">Tiruppur</option>
				<option value="Trichirappalli"> Trichirappalli</option>
				<option value="Tuticorin"> Tuticorin</option>
				<option value="Vellore">Vellore </option>
				<option value="Villupuram ">Villupuram </option>
				<option value="Virudhunagar">Virudhunagar</option>
				</select><br><br>
				<label><b>Area</b></label>
				<input type="txt"  name="tk"><br><br>	
				<label><b>City</b></label>
				<input type="txt" name="cy" ><br><br>	
				<label><b>Address</b></label><br>
				<textarea name="addr" type="txt" rows="10" cols="40" >
                </textarea>				
				<br><br><label><b>Pincode</b></label><br>
					<input type="number_format" placeholder="" name="pin" size="10" required maxlength="6">	
						
						<br><br>		
	</div></td>
	<tr><td><div id="d2">
	<button class="button"><center><h1 style="font-size:18px"><b>School Details</b></h1></center></button><br>
	<br>
				<b>School Name </b>
				<input type="text" placeholder="" name="ina" size="30" required>
				<br><br>
				<label><b>District</b></label>
				<select  class="dis"  name="ids">
				<option>--Select--</option>
				<option value="Ariyalur">Ariyalur</option>
				<option value="Chennai" >Chennai</option>
				<option value="Coimbatore">Coimbatore </option>
				<option value="Cuddalore">Cuddalore </option>
				<option value="Dharmapuri">Dharmapuri</option>
				<option value="Dindigul">Dindigul</option>
				<option value="Erode">Erode</option>
				<option value="Kancheepuram">Kancheepuram</option>
				<option value="Kanyakumari">Kanyakumari</option>
				<option value="Karur">Karur</option>
				<option value="Krishnagiri">Krishnagiri </option>
				<option value="Madurai">Madurai</option>
				<option value="Nagapattinam">Nagapattinam</option>
				<option value="Namakkal">Namakkal</option>
				<option value="Perambalur ">Perambalur </option>
				<option value="Pudukottai">Pudukottai</option>
				<option value="Ramanathapuram">Ramanathapuram</option>
				<option value="Salem">Salem</option>
				<option value="Sivagangai">Sivagangai</option>
				<option value="Thanjavur"> Thanjavur</option>
				<option value="Theni">Theni</option>
				<option value="The Nilgiris "> The Nilgiris </option>
				<option value="Thirunelveli"Thirunelveli</option>
				<option value="Thiruvallur ">Thiruvallur </option>
				<option value="Thiruvannamalai">Thiruvannamalai</option>
				<option value="Thiruvarur">Thiruvarur</option>
				<option value="Tiruppur">Tiruppur</option>
				<option value="Trichirappalli"> Trichirappalli</option>
				<option value="Tuticorin"> Tuticorin</option>
				<option value="Vellore">Vellore </option>
				<option value="Villupuram ">Villupuram </option>
				<option value="Virudhunagar">Virudhunagar</option>
				</select><br><br>
				<label><b>Area</b></label>
				<input type="txt"  name="itk"><br><br>	
				<label><b>City</b></label>
				<input type="txt" name="icy" ><br><br>	
				<label><b> School Address</b></label><br>
				<textarea name="iaddr" rows="10" cols="40" >
                </textarea>				
				<br><br><label><b>Pincode</b></label><br>
					<input  name="ipin" size="10" required maxlength="6">	
						
						<br><br>		
	</div></td><td>
	<div id="d1">
	<button class="button"><center><h1 style="font-size:18px"><b>Train Station Details</b></h1></center></button><br>
	<br>
	<label><b>From</b></label>
	<input type="txt" name="from" ><br><br>	
	<label><b>To</b></label>
	<input type="txt" name="to" ><br><br>
    <label><b>Kilometer</b></label><br>
	<input type="radio" name="km" value="10"><=10 kms
				<input type="radio"name="km" value="20"><=20 kms
				<input type="radio"name="km" value="30"><=30 kms<br><br>
	 <label><b>Pass Duration </b></label><br>
				<input type="radio" name="m" value="3">3 Months
				<input type="radio"name="m" value="6">6 Months
				<input type="radio"name="m" value="12">1 year<br><br>
	<label><b>Pass Generation Date</b></label>
	<input type="date" name="dat" ><br><br>	
	
	<tr> <td cols span="3">
	<a href=""><button  type="submit" class="register_btn" name="submit" align="center">SUBMIT</button></a>
	</td><td>
     </form>
</body>
</html>
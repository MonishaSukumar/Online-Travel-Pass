<?php
require('fpdf/fpdf.php');
require('dbconfig/config.php');
$con=connect();
$r=mysqli_query($con,"select * from busa10 where apn='".$_GET['apn']."'");
$o=mysqli_fetch_array($r);
if($o['py']==1){
$p=new FPDF('P','mm','A4');
$p->AddPage();
$p->SetFont('Arial','B',16);
$p->Cell(200,10,'BUS PASS ',0,1,'C');
$p->Cell(200,10,'',0,1,'L');
$p->SetFont('Arial','',13);
$p->Cell(27,5,'',0,0,'L');$p->Cell(130,7,'Student Details',1,1,'C');
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Application Number',1,0,'L');$p->Cell(60,7,$o['apn'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Name',1,0,'L');$p->Cell(60,7,$o['un'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Father/Guardian Name',1,0,'L');$p->Cell(60,7,$o['fn'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Date of Birth',1,0,'L');$p->Cell(60,7,$o['dob'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Gender',1,0,'L');$p->Cell(60,7,$o['gen'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Aadhar Number',1,0,'L');$p->Cell(60,7,$o['aad'],1,1);
$p->SetFont('Arial','',13);
$p->Cell(130,7,'',0,1,'L');
$p->Cell(27,5,'',0,0,'L');$p->Cell(130,7,'Residential Address',1,1,'C');
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,10,'Address',1,0,'L');$p->Cell(60,10,$o['addr'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'City',1,0,'L');$p->Cell(60,7,$o['cy'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Area',1,0,'L');$p->Cell(60,7,$o['tk'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'District',1,0,'L');$p->Cell(60,7,$o['ds'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Pin Code',1,0,'L');$p->Cell(60,7,$o['pin'],1,1);
$p->SetFont('Arial','',13);
$p->Cell(130,7,'',0,1,'L');
$p->Cell(27,5,'',0,0,'L');$p->Cell(130,7,'Institution Details',1,1,'C');
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Institution Name',1,0,'L');$p->Cell(60,7,$o['ina'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Address',1,0,'L');$p->Cell(60,7,$o['iaddr'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'City',1,0,'L');$p->Cell(60,7,$o['icy'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Area',1,0,'L');$p->Cell(60,7,$o['itk'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'District',1,0,'L');$p->Cell(60,7,$o['ids'],1,1);
$p->Cell(27,5,'',0,0,'L');$p->Cell(70,7,'Pin Code',1,0,'L');$p->Cell(60,7,$o['ipin'],1,1);
$p->SetFont('Arial','',13);
$p->Cell(130,7,'',0,1,'L');
$p->Cell(27,7,'',0,0,'L');
$p->Cell(130,7,'Route Details',1,1,'C');
$p->Cell(27,7,'',0,0,'L');$p->Cell(70,7,'From',1,0,'L');$p->Cell(60,7,$o['from'],1,1);
$p->Cell(27,7,'',0,0,'L');$p->Cell(70,7,'To',1,0,'L');$p->Cell(60,7,$o['to'],1,1);
$p->Cell(27,7,'',0,0,'L');$p->Cell(70,7,'Pass Duration',1,0,'L');$p->Cell(60,7,''.$o['m'].'months',1,1);
$p->Cell(27,7,'',0,0,'L');$p->Cell(70,7,'Pass Generated Date',1,0,'L');$p->Cell(60,7,$o['dat'],1,1);
$p->Cell(27,7,'',0,0,'L');$p->Cell(70,7,'Renew Date',1,0,'L');$p->Cell(60,7,$o['renewd'],1,1);
$p->Cell(130,7,'',0,1,'C');
$p->Cell(200,7,'Collect your original Pass From your near by Center',0,1,'C');
$p->output();}
else{
	echo '<script type="text/javascript">alert("Payment is Pending")</script>';
}
?>
<html>
<body>
<br><a href="payba.php"><center>  proceed to payment</center></a></body>
<br><a href="bsr.php"><center>  Back </center></a></body>
<br><a href="logout.php"><center>  Logout </center></a></body>
</body>
</html>
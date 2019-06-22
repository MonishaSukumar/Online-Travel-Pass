<html>
<head>
<link rel="shortcut icon" href="images/train.jpg">
<link rel="stylesheet" href="css/selectpg.css">
</head>
<body style="background-image:url(images/train.jpg);background-repeat:no-repeat center center fixed;background-size:cover">
<div class="b">

<center>
<form action="teview.php" method="post">
<a href="tereg.php"><button type="button" class="btn"  type="button">Registration </button><br><br></a>
<a href="trenew.php"><button type="button" class="btn">Renewal</button><br><br></a>
<button  type="submit" name="s"class="btn">View Profile Details</button><br><br></a>
<a href="tgen.php"><button  type="button" name="s" class="btn">Generate Pass</button><br><br></a>
<button class="btn"  type="button"onclick="contact()">Contact Us</button><br><br>
<a id="c" href="https://accounts.google.com/"></a>
<a href="logout.php"><button class="btn"  type="button">Logout</button><br><br></a>
</form></div>
<script>
function contact()
{
document.getElementById("c").innerHTML="travelpassonline@gmail.com";
}
</script>
</body>
</html>
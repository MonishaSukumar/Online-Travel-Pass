<html>
<head>
<link rel="shortcut icon" href="images/metro.jpg">
<link rel="stylesheet" href="css/selectpg.css">
</head>
<body style="background-image:url(images/metro.jpg);background-repeat:no-repeat center center fixed;background-size:cover">
<div class="b">

<center>
<form action="meview.php" method="post">
<a href="msreg.php"><button type="button" class="btn"  type="button">Registration </button><br><br></a>
<a href="mrenew.php"><button type="button" class="btn">Renewal</button><br><br></a>
<button  type="submit" name="s"class="btn">View Profile Details</button><br><br></a>
<a href="mgen.php"><button  type="button" name="s" class="btn">Generate Pass</button><br><br></a>
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
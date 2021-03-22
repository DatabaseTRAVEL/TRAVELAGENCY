<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="stylecss.css" rel='stylesheet' type='text/css'/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->

<body>
<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into flightreservation(name,phone_number,email,seat,FlightRef) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_REQUEST["FlightNumber"] ."')";	
	
	
		mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
}
?>

<?php include('top.php'); ?>
<br>
<br>
<br>
<!--/sticky-->
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-size:18px" color="#09F">Country</td></tr>
<?php

$s="select * from fcategory";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style=' padding:5px;'><a href='flightsubcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px">
<tr><td class="headingText">Enquiry</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px">
<td>

<table border="0"; width="600px" height="400px" align="center" >
<?php

$s="select * from flights,fcategory,city where fcategory.fcatid=city.fcatid and flights.cityid=city.cityid and flights.FlightsNumber='" . $_GET["FlightNumber"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 
<form method="post" enctype="multipart/form-data">
<tr><td colspan="3" class="middletext">Flight Number :&nbsp;&nbsp;&nbsp;<?php echo $data[0];?></td></tr>
<tr><td class="lefttxt">Name:</td><td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name"/></td></tr><br/>
<tr><td class="lefttxt">Mobile No.</td><td><input type="text" name="t2" required pattern="[0-9]{10,12}" title"Please Enter Only numbers between 10 to 12 for Mobile No"/></td></tr><br/>
<tr><td class="lefttxt">Email:</td><td><input type="email" name="t3" required /></td><td><br/>
<tr><td class="lefttxt">Seat No.</td><td><input type="text" name="t4" required pattern="[0-9]{1,2}" title"Please Enter Only numbers between 1 to 60 for Mobile No"/></td></tr><br/>
<tr><td>&nbsp;</td><td ><input type="submit" value="Submit" name="sbmt" /></td></tr>

</form></td></tr>
</table>
</td>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>


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
</head>

<body>
<?php include('function.php'); ?>
<?php include('top.php'); ?>
<br>
<br>
<br>
<!--/sticky-->
<?php include('slider.php'); ?>
<div style="height:50px"></div>
<div style="width:1000px; margin:auto"  >

<div style="width:200px; font-size:18px; color:#09F; float:left">

<table cellpadding="0" cellspacing="0" width="1000px" >
<tr><td style="font-size:18px" color="#09F">Hotel Rating</td></tr>
<?php

$s="select * from category ";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
		echo "<tr><td style=' padding:5px;'><a href='hotelsubcat.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
?>

</table>

</div>

<div style="width:800px; float:left">
<table cellpadding="0px" cellspacing="0" width="1000px" >
<tr><td class="headingText">Welcome to our Hotels page</td></tr>
<tr><td class="paraText" width="900px">
<table cellpadding="0" cellspacing="0" width="900px" border="0">
<tr>
<td>

<table border="0" width="600px" height="400px" align="center" >
<?php

$s="select * from category,hotel where hotel.rating=category.cat_id and hotel.HotelNumber='" . $_GET["hotelsubcatid"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;
$n=0;
$data=mysqli_fetch_array($result);
mysqli_close($cn);
?>
 

<tr><td colspan="3"><span class="middletext">Hotel Category:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $data[1];?></td></tr>
<tr><td class="middletext"><img src="Admin/packimages/<?php echo $data[5];?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data[1];?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data[1];?>" width="200px" height="200px"  /></td>
</tr>
<tr><td  colspan="3" height="90px"><span class="middletext">HotelName:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $data[3];?>
 <br/>
  <span class="middletext">Rating:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $data[4];?>
  <br/>
   <span class="middletext">Location:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $data[5];?>
</td></tr>
<tr><td colspan="3"><p><?php echo $data[1];?></p></td></tr>
<tr><td align="left" colspan="3" height="50px"><a href="hotelreservation.php?HotelNumber=<?php echo $data[0];   ?>"><input type="button" value="Enquiry" name="sbmt" /></a></td></tr>
</table>
</td>
</tr>
</table>
</td></tr>
</table>

</div>

</div>

<div style="clear:both"></div>

<?php include('bottom.php'); ?>
</body>
</html>


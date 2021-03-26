<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<table style="width:100%">
<tr><td style="font-size:28px">Admin Links</td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td><a href="adduser.php">Add User</a></td></tr>
<tr><td><a href="updateuser.php">Update User</a></td></tr>
<tr><td><a href="deleteuser.php">Delete User</a></td></tr>

<?php }?>

<tr><td><a href="addcategory.php">Add Category</a></td></tr>
<tr><td><a href="addcountry.php">Add Country</a></td></tr>
<tr><td><a href="addcity.php">Add City</a></td></tr>
<tr><td><a href="addflight.php">Add Flight</a></td></tr>
<tr><td><a href="addhotel.php">Add Hotel</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td><a href="updatecategory.php">Update Category</a></td></tr>
<tr><td><a href="updatecity.php">Update City</a></td></tr>
<tr><td><a href="updatecountry.php">Update Country</a></td></tr>
<tr><td><a href="updateflight.php">Update Flight</a></td></tr>
<tr><td><a href="updatehotel.php">Update hotel</a></td></tr>
<tr><td><a href="deletecategory.php">Delete Category</a></td></tr>
<tr><td><a href="deletecity.php">Delete City</a></td></tr>
<tr><td><a href="deletecountry.php">Delete Country</a></td></tr>
<tr><td><a href="deleteflight.php">Delete Flight</a></td></tr>
<tr><td><a href="deletehotel.php">Delete Hotel</a></td></tr>
<?php }?>
</table>


</body>
</html>
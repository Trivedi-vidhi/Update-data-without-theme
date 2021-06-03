<?php
$connection = mysqli_connect ("localhost","root","","user");

$id =$_GET['deleteid'];

$q = mysqli_query($connection,"delete  from user_table where u_id = '{$id}'")
or die (mysqli_error($connection));

if($q)
{
	echo"<script>alert('Record deleted successfully');window.location='userdisplay.php';</script>";
}
?>
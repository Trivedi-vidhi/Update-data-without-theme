<?php
$connection = mysqli_connect ("localhost","root","","student");

$id =$_GET['deleteid'];

$q = mysqli_query($connection,"delete  from student_table where Student_id = '{$id}'")
or die (mysqli_error($connection));

if($q)
{
	echo"<script>alert('Record deleted successfully');window.location='display1.php';</script>";
}
?>
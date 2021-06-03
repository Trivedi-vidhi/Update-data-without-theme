<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="user";

	$connection = mysqli_connect ("localhost","root","","user");
if($_POST)
{	
	$u_id =$_POST['u_id'];
	$u_name =$_POST['u_name'];
	$u_gender =$_POST['u_gender'];
	
	
$sql= "insert into user_table(u_id,u_name,u_gender) values ('$u_id','$u_name','$u_gender')";
//or die ("error" mysqli_error($connection);
$q=mysqli_query($connection,$sql);

if($q)
{
	echo "<script>alert('data successfully added');</script>";
}
else
{
	print mysqli_error($connection);
}
}
?>
<html>
<body bgcolor="pink">
<form action = "" method="post">
u_id:<input type="text"name="u_id"placeholder="Enter your ID"/><br>
u_name:<input type="text"name="u_name"placeholder="Enter your Name"/><br>
u_gender:<input type="radio"name="u_gender"value="Male"/>Male<input type="radio"name="u_gender"value="Female"/>Female<br>

<input type="submit"/>
<?php
echo "<a href='userdisplay.php'> Show record</a>";
?>
</form>

</body>
</html>
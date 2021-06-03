<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="student";

	$connection = mysqli_connect ("localhost","root","","student");
if($_POST)
{	
	$Student_id =$_POST['Student_id'];
	$Student_name =$_POST['Student_name'];
	$Student_gender =$_POST['Student_gender'];
	$Student_email =$_POST['Student_email'];
	$Student_dob =$_POST['Student_dob'];
	$Student_mobile =$_POST['Student_mobile'];
	$Student_address =$_POST['Student_address'];
	$Student_bloodgroup =$_POST['Student_bloodgroup'];
	$Student_password =$_POST['Student_password'];
	$Student_city =$_POST['Student_city'];
	
$sql= "insert into student_table(Student_id,Student_name,Student_gender,Student_email,Student_dob,Student_mobile,Student_address,student_bloodgroup,Student_password,Student_city) values ('$Student_id','$Student_name','$Student_gender','$Student_email','$Student_dob','$Student_mobile','$Student_address','$Student_bloodgroup','$Student_password','$Student_city')";
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
<body bgcolor="skyblue">
<form action = "" method="post">
Student_id:<input type="text"name="Student_id"placeholder="Enter your ID"/><br>
Student_name:<input type="text"name="Student_name"placeholder="Enter your Name"/><br>
Student_gender:<input type="radio"name="Student_gender"value="Male"/>Male<input type="radio"name="Student_gender"value="Female"/>Female<br>
Student_email:<input type="text"name="Student_email"placeholder="Enter your Email ID"/><br>
Student_dob:<input type="text"name="Student_dob"placeholder="Enter your DOB"/><br>
Student_mobile:<input type="text"name="Student_mobile"placeholder="Enter your Mobile number"/><br>
Student_address:<input type="text"name="Student_address"placeholder="Enter your Address"/><br>
Student_bloodgroup:<input type="text"name="Student_bloodgroup"placeholder="Enter your bloodgroup"/><br>
Student_password:<input type="text"name="Student_password"placeholder="Enter your Password"/><br>
Student_city:<select name="Student_city"/><option>Vadodara</option>
					<option>Ahmedabad</option>
					<option>Surat</option>
					<option>Rajkot</option><br>


<input type="submit"/>
<?php
echo "<a href='display1.php'> Show record</a>";
?>
</form>

</body>
</html>
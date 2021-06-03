<?php
$connection = mysqli_connect("localhost","root","","student");

if(!isset($_GET['editid'])  || empty($_GET['editid'])){
	header("location:display1.php");
}

$editid = $_GET['editid'];

$editq=mysqli_query($connection,"select * from Student_table where Student_id='{$editid}'") or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);

if($_POST){
	$Student_id = $_POST['Student_id'];
	$Student_name = $_POST['Student_name'];
	$Student_gender = $_POST['Student_gender'];
	$Student_email = $_POST['Student_email'];
	$Student_dob = $_POST['Student_dob'];
	$Student_mobile = $_POST['Student_mobile'];
	$Student_address = $_POST['Student_address'];
	$Student_bloodgroup = $_POST['Student_bloodgroup'];
	$Student_password = $_POST['Student_password'];
	$Student_city = $_POST['Student_city'];
	$q = mysqli_query($connection,"update student_table set Student_id='{$Student_id}',Student_name='{$Student_name}',Student_gender='{$Student_gender}',Student_email='{$Student_email}',Student_dob='{$Student_dob}',Student_mobile='{$Student_mobile}',Student_address='{$Student_address}',Student_bloodgroup='{$Student_bloodgroup}',Student_password='{$Student_password}',Student_city='{$Student_city}'where Student_id='{$editid}'")or die(mysqli_error($connection));
	
	if($q){
		echo "<script>alert('Record Updated');window.location='display1.php';</script>";
	}
}?>
<html>
<body bgcolor="skyblue">
<form action = "" method="post">
Student_id:<input type="text" value="<?php echo $editdata['Student_id'];?>"name="Student_id"placeholder="Enter your ID"/><br>
Student_name:<input type="text"value="<?php echo $editdata['Student_name'];?>"name="Student_name"placeholder="Enter your Name"/><br>
Gender: Male<input type="radio" <?php if($editdata['Student_gender']=="Male"){echo "checked";}?> value="Male" name="Student_gender"/>
Female<input type="radio" <?php if($editdata['Student_gender']=="Female"){echo "checked";}?> value="Female" name="Student_gender"/><br>
Student_email:<input type="text"value="<?php echo $editdata['Student_email'];?>"name="Student_email"placeholder="Enter your Email ID"/><br>
Student_dob:<input type="text"value="<?php echo $editdata['Student_dob'];?>"name="Student_dob"placeholder="Enter your DOB"/><br>
Student_mobile:<input type="text"value="<?php echo $editdata['Student_mobile'];?>"name="Student_mobile"placeholder="Enter your Mobile number"/><br>
Student_address:<input type="text"value="<?php echo $editdata['Student_address'];?>"name="Student_address"placeholder="Enter your Address"/><br>
Student_bloodgroup:<input type="text"value="<?php echo $editdata['Student_bloodgroup'];?>"name="Student_bloodgroup"placeholder="Enter your bloodgroup"/><br>
Student_password:<input type="text"value="<?php echo $editdata['Student_password'];?>"name="Student_password"placeholder="Enter your Password"/><br>
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
<?php
$connection = mysqli_connect("localhost","root","","user");

if(!isset($_GET['editid'])  || empty($_GET['editid'])){
	header("location:userdisplay.php");
}

$editid = $_GET['editid'];

$editq=mysqli_query($connection,"select * from user_table where u_id='{$editid}'") or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);

if($_POST){
	$u_id = $_POST['u_id'];
	$u_name = $_POST['u_name'];
	$u_gender = $_POST['u_gender'];
	
	$uq = mysqli_query($connection,"update user_table set u_id='{$u_id}',u_name='{$u_name}',u_gender='{$u_gender}' where u_id='{$editid}'")or die(mysqli_error($connection));
	
	if($uq){
		echo "<script>alert('Record Updated');window.location='userdisplay.php';</script>";
	}
}?>
<html>
<body>
<form method="post">

Id: <input type="text" value="<?php echo $editdata['u_id'];?>" name="u_id"/><br>
Name: <input type="text" value="<?php echo $editdata['u_name'];?>" name="u_name"/><br>
Gender: Male<input type="radio" <?php if($editdata['u_gender']=="Male"){echo "checked";}?> value="Male" name="u_gender"/>
Female<input type="radio" <?php if($editdata['u_gender']=="Female"){echo "checked";}?> value="Female" name="u_gender"/>
<input type= "submit"/>
</form>
</body>
</html>
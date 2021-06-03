
		
<?php
	$connection = mysqli_connect ("localhost","root","","student");
	
$q=mysqli_query($connection,"select * from student_table  ") or die(mysqli_error($connection));

echo "<table border='2'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Gender </th>";
echo "<th> E-mail </th>";
echo "<th> DOB </th>";
echo "<th> Mobile </th>";
echo "<th> Address </th>";
echo "<th> Bloodgroup </th>";
echo "<th> Password </th>";
echo "<th> City </th>";
echo "<th>Action</th>";


while($row = mysqli_fetch_array($q)){
	
	echo"<tr>";
	echo "<td>{$row['Student_id']}</td>";
	echo "<td>{$row['Student_name']}</td>";
	echo "<td>{$row['Student_gender']}</td>";
	echo "<td>{$row['Student_email']}</td>";
	echo "<td>{$row['Student_dob']}</td>";
	echo "<td>{$row['Student_mobile']}</td>";
	echo "<td>{$row['Student_address']}</td>";	
	echo "<td>{$row['Student_bloodgroup']}</td>";
	echo "<td>{$row['Student_password']}</td>";
	echo "<td>{$row['Student_city']}</td>";
	echo "<td><a href='edit1.php?editid={$row['Student_id']}'>edit</a>|<a href='delete1.php?deleteid={$row['Student_id']}'>delete</a></td>";
	echo"</tr>";
}
echo "</table>";
echo "<a href='student.php'>Add record </a>";
?>

		

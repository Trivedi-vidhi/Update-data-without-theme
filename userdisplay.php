
		
<?php
	$connection = mysqli_connect ("localhost","root","","user");
	
$q=mysqli_query($connection,"select * from user_table  ") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th> ID </th>";
echo "<th> Name </th>";
echo "<th> Gender </th>";
echo "<th>Action</th>";


while($row = mysqli_fetch_array($q)){
	
	echo"<tr>";
	echo "<td>{$row['u_id']}</td>";
	echo "<td>{$row['u_name']}</td>";
	echo "<td>{$row['u_gender']}</td>";
	echo "<td><a href='useredit.php?editid={$row['u_id']}'>edit</a>|<a href='userdelete.php?deleteid={$row['u_id']}'>delete</a></td>";
	echo"</tr>";
}
echo "</table>";
echo "<a href='user.php'>Add record </a>";
?>

		

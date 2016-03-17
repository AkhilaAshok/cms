<?

	$con = mysql_connect("localhost","akhila","akhila");
	if (!$con)
	{
 		 die('Could not connect: ' . mysql_error());
	}
	
	
	mysql_select_db("cms", $con);

	$sql="select * from student order by name";
	echo "<select name=student value=''> <option> Student Name </option>";
	echo "<option value=$row[rollno]> $row[name]</option>";
	echo "</select>";
?>




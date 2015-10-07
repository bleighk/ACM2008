<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 3 | Week 8</title>
</head>
<body>

<table border="1">
<tr>
	<th>id</th>
	<th>title</th>
	<th>author</th>
	<th>date</th>
</tr>
<?php
	require 'dblink.php';

	//$sql="SELECT * FROM tblcontent;";
	$sql = $con->prepare("SELECT * FROM tblcontent;");
	

	//$result=mysqli_query($con,$sql);
	$sql->execute();

	//$row=mysqli_fetch_array($result);
	$sql->bind_result($content_id, $content_title, $content_author, $date);

	/*while ($row = mysqli_fetch_array($result)) 
	{
		echo "<tr>";
		echo "<td>".$row['content_id']."</td>";
		echo "<td>".$row['content_title']."</td>";
		echo "<td>".$row['content_author']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";

		/*echo "<p>".$row['content_id']."</p>";
		echo "<p>".$row['content_title']."</p>";
		echo "<p>".$row['content_author']."</p>";
		echo "<p>".$row['date']."</p>";*/
	//}

	while ($sql->fetch()){

		echo "<tr>";
		echo "<td>".$content_id."</td>";
		echo "<td>".$content_title."</td>";
		echo "<td>".$content_author."</td>";
		echo "<td>".$date."</td>";
		echo "</tr>";
	}


	//mysqli_close($con);
	$con->close();
?>
</table>
</body>
</html>
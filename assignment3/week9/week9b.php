<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ACM2008 | s3924650 Bradley Knight | Assignment 3 Week 9b</title>
</head>

<body>

<?php

require 'dblink.php';

//get data from table and store in local variables
$var_fName=mysqli_real_escape_string($con, $_REQUEST['fName']);
$var_lName=mysqli_real_escape_string($con, $_REQUEST['lName']);
$var_guest_phone=mysqli_real_escape_string($con, $_REQUEST['guest_phone']);
$var_guest_meal=mysqli_real_escape_string($con, $_REQUEST['guest_meal']);



//create first SQL query
$sql1="INSERT INTO tblguests (guest_fName, guest_lName, guest_phone, guest_meal) VALUES ('".$var_fName."', '".$var_lName."', '".$var_guest_phone."', '".$var_guest_meal."');";

//create second SQL query
$sql2="SELECT * FROM tblguests;";

//execute first SQL query
if (mysqli_query($con,$sql1)) {
	echo "<p>User details successfully added to database</p>";
} else {
  echo "<p>Error adding user record: " . mysqli_error($con)."</p>";
};

//execute second SQL query
$result=mysqli_query($con,$sql2);

//close the connection
mysqli_close($con);

?>




<p><a href="week9c.html">Admin</a></p>


</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise 2B</title>
</head>

<body>

<?php

//Connect to the database - make sure that you have 'connect.php' saved in the same folder as this file.
require 'dblink.php';

//get data from table and store in local variables
$var_fname=mysqli_real_escape_string($con, $_REQUEST['fname']);
$var_lname=mysqli_real_escape_string($con, $_REQUEST['lname']);
$var_username=mysqli_real_escape_string($con, $_REQUEST['username']);
$var_password=mysqli_real_escape_string($con, $_REQUEST['password']);
$var_member_type=mysqli_real_escape_string($con, $_REQUEST['member_type']);

//Encrypt password
$var_password=sha1($var_password);

//create first SQL query
$sql1="INSERT INTO tblusers (first_name, last_name, username, password, member_type) VALUES ('".$var_fname."', '".$var_lname."', '".$var_username."', '".$var_password."', '".$var_member_type."');";

//create second SQL query
$sql2="SELECT * FROM tblusers;";

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

<!-- create HTML table and loop to display tblusers content -->
<table border="1">
<tr>
	<th>ID</th>
	<th>Username</th>
	<th>Password</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Member Type</th>
</tr>
<?php
while ($row=mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>".$row['user_id']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['password']."</td>";
	echo "<td>".$row['first_name']."</td>";
	echo "<td>".$row['last_name']."</td>";
	echo "<td>".$row['member_type']."</td>";
	echo "</tr>";
}
?>
</table>
<p><a href="exercise2a.html">Back</a</p>


</body>
</html>
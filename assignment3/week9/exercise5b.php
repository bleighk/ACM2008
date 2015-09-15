<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Exercise 5B</title>
</head>

<body>

<?php

//connect to database
require 'dblink.php';

//get data from form and escape for security
$var_username=mysqli_real_escape_string($con, $_REQUEST['username']);
$var_password=mysqli_real_escape_string($con, $_REQUEST['password']);

//hash password field
$var_password=sha1($var_password);

//create SQL query
$sql="SELECT username, password, first_name FROM tblusers WHERE username='".$var_username."';";

//execute sql query
$result=mysqli_query($con, $sql);
$myrow=mysqli_fetch_array($result);

//close the connection
mysqli_close($con);

//check password and display result
if ($var_password==$myrow['password']) {
	echo "<p>Success! Welcome ".$myrow['first_name'].".</p>";
}
else {
	echo "<p>Sorry, that username or password is incorrect.</p>";
	echo "<p><a href=\"exercise5a.html\">Try again</a></p>";
}

?>



</body>
</html>
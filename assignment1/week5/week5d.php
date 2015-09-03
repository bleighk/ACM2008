<?php
session_start();
$var_extras=$_REQUEST['radioExtras'];
$_SESSION['ses_extras']=$var_extras;
$var_pcost=$_SESSION['ses_pcost'];
$var_companions=$_SESSION['ses_companions'];
$var_total=$var_pcost*$var_companions+$var_extras;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 1 Week 5d</title>
</head>
<body>
	<p>Thank you for your booking.</p>
	<?php
		echo "Your total ticket cost is $".$var_total;
	?>
</body>
</html>
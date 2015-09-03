<?php
	$var_name=$_REQUEST['Name'];
	$var_email=$_REQUEST['emailAddress'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 1 Week 3b</title>
</head>
<body>
<p>Thank you for your enquiry. We will be in touch with you shortly.</p>

<p><strong>Your name:</strong>
	<?php
		echo "$var_name";
	?>
</p>

<p><strong>Your email address:</strong>
	<?php
		echo "$var_email";
	?>
</p>
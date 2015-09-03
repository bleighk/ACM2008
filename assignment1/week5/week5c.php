<?php
session_start();
$var_companions=$_REQUEST['companions'];
$_SESSION['ses_companions']=$var_companions;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 1 Week 5c</title>
</head>
<body>

<form action="week5d.php" method="post" name="formExtras" id="formExtras">
	<p>Please select your Holiday Package optional extra:</p>

	<label><input type="radio" name="radioExtras" value="50" id="towel" selected>Souvenir Towel ($50)</label>
	<br>
	<label><input type="radio" name="radioExtras" value="20" id="photograph">Commemorative Photograph ($20)</label>
	<br>
	<label><input type="radio" name="radioExtras" value="70" id="party">Final Night Party ($70)</label>
	<br>
	<label><input type="radio" name="radioExtras" value="200" id="camera">Video Camera ($200)</label>
	<br>
	<label><input type="radio" name="radioExtras" value="0" id="extrasNone">None</label>
	<br><br>

	<input type="submit" name="submit" id="submit" value="Submit">
	<input type="reset" name="reset" id="reset" value="Reset">
</form>
</body>
</html>
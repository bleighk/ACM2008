<?php
session_start();
$var_userName=$_REQUEST['userName'];
$_SESSION['ses_userName']=$var_userName;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 1</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<form action="2.php" method="post" name="formQ1" id="formQ1">
		<p>1.<strong> Are roadside drug tests performed on Victorian roads?</strong></p>

		<label><input type="radio" name="answer1" value="A" id="Q1a" selected>A) Yes, but only after a positive alcohol test</label>
		<br>
		<label><input type="radio" name="answer1" value="B" id="Q1b">B) Yes, random road side drug testing is performed in Victoria</label>
		<br>
		<label><input type="radio" name="answer1" value="C" id="Q1c">C) No</label>
		<br>
		<label><input type="radio" name="answer1" value="D" id="Q1d">D) Not sure</label>
		<br><br>

		<input type="submit" name="submit" id="submit" value="Submit">
		<input type="reset" name="reset" id="reset" value="Reset">
	</form>
	<p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
</div>
</body>
</html>
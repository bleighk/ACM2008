<?php
session_start();
$answer10=$_REQUEST['answer10'];
$_SESSION['ses_answer10']=$answer10;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 11</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/60area.svg" alt="60 area sign" style="width:146px;height:146px;">
	<form action="12.php" method="post" name="formQ11" id="formQ11">
		<p>11.<strong> You drive past this sign. What does it tell you?</strong></p>

		<label><input type="radio" name="answer11" value="A" id="Q11a" selected>A) The recommended speed limit for this road, and other roads in this area is 60 km/h</label>
		<br>
		<label><input type="radio" name="answer11" value="B" id="Q11b">B) You are allowed to drive on this road no faster than 60 km/h in good conditions</label>
		<br>
		<label><input type="radio" name="answer11" value="C" id="Q11c">C) You are allowed to drive on this road, and other roads in this area, no faster than 60 km/h</label>
		<br>
		<label><input type="radio" name="answer11" value="D" id="Q11d">D) You are allowed to drive on this road no faster than 60 miles per hour in good conditions</label>
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
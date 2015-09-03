<?php
session_start();
$answer9=$_REQUEST['answer9'];
$_SESSION['ses_answer9']=$answer9;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 10</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/stop.svg" alt="Stop sign" style="width:146px;height:146px;">
	<form action="11.php" method="post" name="formQ10" id="formQ10">
		<p>10.<strong> When you encounter a stop sign at an intersection, what must you do?</strong></p>

		<label><input type="radio" name="answer10" value="A" id="Q10a" selected>A) You must come to a complete stop, and then go</label>
		<br>
		<label><input type="radio" name="answer10" value="B" id="Q10b">B) You must give way to other vehicles</label>
		<br>
		<label><input type="radio" name="answer10" value="C" id="Q10c">C) You must come to a complete stop and give way to all vehicles</label>
		<br>
		<label><input type="radio" name="answer10" value="D" id="Q10d">D) You must come to a complete stop, turn off your engine and recline your seat all the way back</label>
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
<?php
session_start();
$answer1=$_REQUEST['answer1'];
$_SESSION['ses_answer1']=$answer1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 2</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<form action="3.php" method="post" name="formQ2" id="formQ2">
		<p>2.<strong> When are you required to carry your licence?</strong></p>

		<label><input type="radio" name="answer2" value="A" id="Q2a" selected>A) When out clubbing</label>
		<br>
		<label><input type="radio" name="answer2" value="B" id="Q2b">B) When you are driving</label>
		<br>
		<label><input type="radio" name="answer2" value="C" id="Q2c">C) When you're walking to the supermarket</label>
		<br>
		<label><input type="radio" name="answer2" value="D" id="Q2d">D) Never</label>
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
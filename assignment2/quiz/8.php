<?php
session_start();
$answer7=$_REQUEST['answer7'];
$_SESSION['ses_answer7']=$answer7;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 8</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/rightowayb.svg" alt="Which car has right of way?" style="width:146px;height:146px;">
	<form action="9.php" method="post" name="formQ8" id="formQ8">
		<p>8.<strong> Which vehicle has right of way?</strong></p>

		<label><input type="radio" name="answer8" value="A" id="Q8a" selected>A) B</label>
		<br>
		<label><input type="radio" name="answer8" value="B" id="Q8b">B) A</label>
		<br>
		<label><input type="radio" name="answer8" value="C" id="Q8c">C) Neither</label>
		<br>
		<label><input type="radio" name="answer8" value="D" id="Q8d">D) A & B as they will pass beside each other</label>
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
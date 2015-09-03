<?php
session_start();
$answer3=$_REQUEST['answer3'];
$_SESSION['ses_answer3']=$answer3;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 4</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/rightowaya.svg" alt="Which car has right of way?">
	<form action="5.php" method="post" name="formQ4" id="formQ4">
		<p>4.<strong> Which vehicle has right of way?</strong></p>

		<label><input type="radio" name="answer4" value="A" id="Q4a" selected>A) A</label>
		<br>
		<label><input type="radio" name="answer4" value="B" id="Q4b">B) A & B, as they will pass beside each other</label>
		<br>
		<label><input type="radio" name="answer4" value="C" id="Q4c">C) B</label>
		<br>
		<label><input type="radio" name="answer4" value="D" id="Q4d">D) Neither</label>
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
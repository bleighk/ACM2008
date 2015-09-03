<?php
session_start();
$answer11=$_REQUEST['answer11'];
$_SESSION['ses_answer11']=$answer11;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 12</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/rightowayc.svg" alt="Which car has right of way?" style="width:146px;height:146px;">
	<form action="quizResults.php" method="post" name="formQ12" id="formQ12">
		<p>11.<strong> Which vehicle has right of way?</strong></p>

		<label><input type="radio" name="answer12" value="A" id="Q12a" selected>A) B</label>
		<br>
		<label><input type="radio" name="answer12" value="B" id="Q12b">B) A</label>
		<br>
		<label><input type="radio" name="answer12" value="C" id="Q12c">C) A & B as they will pass beside each other</label>
		<br>
		<label><input type="radio" name="answer12" value="D" id="Q12d">D) C</label>
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
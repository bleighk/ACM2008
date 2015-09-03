<?php
session_start();
$answer4=$_REQUEST['answer4'];
$_SESSION['ses_answer4']=$answer4;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 5</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/overtakea.svg" alt="Can car A overtake car B?">
	<form action="6.php" method="post" name="formQ5" id="formQ5">
		<p>5.<strong> Assuming that there is no oncoming traffic, can Car A overtake Car B?</strong></p>

		<label><input type="radio" name="answer5" value="A" id="Q5a" selected>A) Yes, as there are broken white lines on Car A's side of the road</label>
		<br>
		<label><input type="radio" name="answer5" value="B" id="Q5b">B) Yes, as the car in front is too slow</label>
		<br>
		<label><input type="radio" name="answer5" value="C" id="Q5c">C) No, as there are broken white lines on Car A's side of the road</label>
		<br>
		<label><input type="radio" name="answer5" value="D" id="Q5d">D) Overtaking is illegal throughout the state of Victoria</label>
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
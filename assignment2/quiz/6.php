<?php
session_start();
$answer5=$_REQUEST['answer5'];
$_SESSION['ses_answer5']=$answer5;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 6</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/l.svg" alt="L plates" style="width:146px;height:146px;">
	<form action="7.php" method="post" name="formQ6" id="formQ6">
		<p>5.<strong> Are you required to display your L plates while driving?</strong></p>

		<label><input type="radio" name="answer6" value="A" id="Q6a" selected>A) No, there is no requirement to display L plates in Victoria</label>
		<br>
		<label><input type="radio" name="answer6" value="B" id="Q6b">B) Yes, L plates must be visable from the front and back of your vehicle's exterior in urban areas only</label>
		<br>
		<label><input type="radio" name="answer6" value="C" id="Q6c">C) L plates must be clearly displayed from the front and back of your vehicle's exterior</label>
		<br>
		<label><input type="radio" name="answer6" value="D" id="Q6d">D) L plates are used only by Victorian taxi services.</label>
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
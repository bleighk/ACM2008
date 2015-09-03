<?php
session_start();
$answer8=$_REQUEST['answer8'];
$_SESSION['ses_answer8']=$answer8;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 9</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<form action="10.php" method="post" name="formQ9" id="formQ9">
		<p>9.<strong> Is it alright to exceed the speed limit when overtaking?</strong></p>

		<label><input type="radio" name="answer9" value="A" id="Q9a" selected>A) Yes</label>
		<br>
		<label><input type="radio" name="answer9" value="B" id="Q9b">B) Yes, but only when you are in a hurry</label>
		<br>
		<label><input type="radio" name="answer9" value="C" id="Q9c">C) Yes, but only if there is danger present</label>
		<br>
		<label><input type="radio" name="answer9" value="D" id="Q9d">D) No</label>
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
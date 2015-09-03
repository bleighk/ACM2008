<?php
session_start();
$answer2=$_REQUEST['answer2'];
$_SESSION['ses_answer2']=$answer2;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 3</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/nuturn.svg" alt="You turn sign">
	<form action="4.php" method="post" name="formQ3" id="formQ3">
		<p>3.<strong> When can you perform a U-turn at traffic lights?</strong></p>

		<label><input type="radio" name="answer3" value="A" id="Q3a" selected>A) When there is a "U-turn Permitted" sign displayed</label>
		<br>
		<label><input type="radio" name="answer3" value="B" id="Q3b">B) Never</label>
		<br>
		<label><input type="radio" name="answer3" value="C" id="Q3c">C) Anytime there isn't a "No U-Turn" sign displayed</label>
		<br>
		<label><input type="radio" name="answer3" value="D" id="Q3d">D) Late at night when there aren't any other cars on the road</label>
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
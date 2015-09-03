<?php
session_start();
$answer6=$_REQUEST['answer6'];
$_SESSION['ses_answer6']=$answer6;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz page 7</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
	<img src="images/overtakeb.svg" alt="Can car A overtake car B?" style="width:146px;height:146px;">
	<form action="8.php" method="post" name="formQ7" id="formQ7">
		<p>7.<strong> Is Car A allowed to overtake Car B?</strong></p>

		<label><input type="radio" name="answer7" value="A" id="Q7a" selected>A) No, as there is a solid white line on Car A's side of the road</label>
		<br>
		<label><input type="radio" name="answer7" value="B" id="Q7b">B) Yes, as the car in front is too slow</label>
		<br>
		<label><input type="radio" name="answer7" value="C" id="Q7c">C) Yes, as there are broken white lines on the other side of the road</label>
		<br>
		<label><input type="radio" name="answer7" value="D" id="Q7d">D) No, as only ambulance, police and fire services are allowed to overtake in the state of Victoria</label>
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
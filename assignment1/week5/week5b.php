<?php
session_start();
$var_pcost=$_REQUEST['radioDestination'];
$_SESSION['ses_pcost']=$var_pcost;
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 1 Week 5b</title>
</head>
<body>

<form action="week5c.php" method="post" name="formPeople" id="formPeople">
	<p>Please select the number of travel companions:
		<select name="companions" id="companions">
			<option value="1" selected>1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>
	</p>

<br>

	<input type="submit" name="submit" id="submit" value="Submit">
	<input type="reset" name="reset" id="reset" value="Reset">

</form>

</body>
</html>
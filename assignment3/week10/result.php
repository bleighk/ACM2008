<?php
session_start();
$score=$_REQUEST['answer'];
$total=$_SESSION['total'];
$total=$total+$score;
$maxquestion=$_SESSION['max'];
$maxquestion=$maxquestion-1;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Congratulations!</p>
<p>You scored: 
<?php echo $total ?>
 out of 
<?php echo $maxquestion ?></p>
</body>
</html>
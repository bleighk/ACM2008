<?php
	$var_hour=$_REQUEST['hour'];
	$var_ampm=$_REQUEST['ampm'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 1 Week 4b</title>
</head>
<body>

<!-- Time Display -->
	<p>
		The time is:

			<?php 
				echo $var_hour; 
				echo $var_ampm; 
			?>
	</p>

<!--Generated If statements-->

	<?php 
	if ($var_hour=="12" && $var_ampm=="AM") {
		echo "You should go to bed!";
	}  

	elseif ($var_hour=="12" && $var_ampm=="PM") {
		echo "Time for some lunch!";
	}


	elseif ($var_hour <= 5 && $var_ampm=="AM") {
		echo "Do androids dream of electric sheep?";
	}

	elseif ($var_hour <= 5 && $var_ampm=="PM") {
		echo "Good afternoon!";
	}


	elseif ($var_hour >= 6 && $var_hour <= 11 && $var_ampm=="AM") {
		echo "Good morning!";
	}

	elseif ($var_hour >= 6 && $var_hour <= 11 && $var_ampm=="PM") {
		echo "Time for some dinner!";
	}
	?>

</body>
</html>


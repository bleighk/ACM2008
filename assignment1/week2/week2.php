<!DOCTYPE html>
<html>
<head>
	<title>Today's date</title>
</head>
<body>
<strong>Welcome!</strong>

<p>The current date is:
<?php
echo date("l jS \of F Y");
?>
</p>
<p>The current time is:
<?php
echo date("h:ia");
?>
</p>
</body>
</html>
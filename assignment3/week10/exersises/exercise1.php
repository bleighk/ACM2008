<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>GET INFORMATION</h2> 

<?php 

//get information from URL
$id = $_GET['id']; 
$name = $_GET['name']; 
echo $id.”<br />”.$name;

?> 
</body>
</html>
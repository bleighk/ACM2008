<?php

//Create a new php file called "exercise1.php" and paste this code into it

//establish connection (make sure you have created 'connect.php', or copy your file from last week to the same directory as this file)
require 'dblink.php';

//create SQL query and store it in a variable
$sql="CREATE TABLE tblusers
(
user_id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(user_id),
username text,
first_name text,
last_name text,
password text,
member_type text
);";

// Execute SQL query (Create database)
if (mysqli_query($con,$sql)) {
  echo "Database tblusers created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
}

//close the connection
mysqli_close($con);

?>

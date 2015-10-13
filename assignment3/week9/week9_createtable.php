<?php

require 'dblink.php';

//create SQL query and store it in a variable
$sql="CREATE TABLE tblguests
(
guest_id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(guest_id),
guest_fName text,
guest_lName text,
guest_phone int(10),
guest_meal text
);";

// Execute SQL query (Create database)
if (mysqli_query($con,$sql)) {
  echo "Database tblguests created successfully";
} else {
  echo "Error creating database: " . mysqli_error($con);
}

//close the connection
mysqli_close($con);

?>
<?php

//establish connection 
require 'dblink.php';

//create SQL query and store it in a variable
$sql="CREATE TABLE tblcontent
(
content_id int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(content_id),
/*Every table needs  aprimary key. generally the best way to set it is to keep it as a value that is never empty, like an auto incrementing integer.*/
content_title text,
content_author text,
date text
);";

//execute SQL query; needs the $con variable so that it knows where to query.
mysqli_query($con,$sql);

//close the connection
mysqli_close($con);

//Check connection
if (mysqli_connect_errno()) {
	echo "Failed to create table: ".mysqli_connect_error();
}
else {
	echo "Table \"tblContent\" created successfully.";
}


?>
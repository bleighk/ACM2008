<?php

//establish connection using our dblink.php file
require 'dblink.php';

//create SQL queries and store them in variables
$sql1="INSERT INTO tblcontent (content_title, content_author, date)
VALUES ('Fried green tomatos','Fannie Flagg','1987');";
$sql2="INSERT INTO tblcontent (content_title, content_author, date)
VALUES ('Final Men','Bob Smith','1987');";
$sql3="INSERT INTO tblcontent (content_title, content_author, date)
VALUES ('The Magnificent Future','The Ministry of Truth','1987');";
$sql4="INSERT INTO tblcontent (content_title, content_author, date)
VALUES ('Pirates are the chosen ones','H. Nds','2004');";
$sql5="INSERT INTO tblcontent (content_title, content_author, date)
VALUES ('The Heart\'s Hunter','Fannie Flagg','1987');";
$sql6="INSERT INTO tblcontent (content_title, content_author, date)
VALUES ('The Girl of the Window','Obrian\'s Glass Co','1987');";

//execute SQL queries
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);
mysqli_query($con,$sql3);
mysqli_query($con,$sql4);
mysqli_query($con,$sql5);
mysqli_query($con,$sql6);

//Close the connection -- make sure you include in our work. often a good idea to close the connection as soon as you are able to, otherwise you are using resources and memory. Just close it ASAP for the benefit of server resources. 
mysqli_close($con);

//Check the connection
if (mysqli_connect_errno()) {
	echo "Failed to add records: ".mysqli_connect_error();
}
else {
	echo "Records added successfully.";
}

?>
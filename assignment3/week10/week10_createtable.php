<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Week 10 - Create table</title>
</head>

<body>
<!-- Note: The php below must be executed by previewing this page in a browser window. However you only need to do this process once. -->
<?php
//create connection - remember to copy your connect.php file to the same directory
require 'dblink.php';

//Create table SQL statement
$createTable = "CREATE TABLE tblQuestions
(
id int(8) NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(id),
question text,
answer_1 text,
score_1 int(2),
answer_2 text,
score_2 int(2),
answer_3 text,
score_3 int(2),
answer_4 text,
score_4 int(2)
);";

echo "<p>";
// Execute SQL query (Create table)
if (mysqli_query($con, $createTable)) {
  echo "Table tblQuestions created successfully.";
} else {
  echo "Error creating table: " . mysqli_error($con);
}
echo "</p>";

//Create data SQL statement
$populateTable1 = "INSERT INTO tblQuestions (question, answer_1, score_1, answer_2, score_2, answer_3, score_3, answer_4, score_4) VALUES ('How many Teenage Mutant Ninja Turtles are there?', '1', '0', '2', '0', '3', '0', '4', '1');";
$populateTable2 = "INSERT INTO tblQuestions (question, answer_1, score_1, answer_2, score_2, answer_3, score_3, answer_4, score_4) VALUES ('The turtles'' sensei is named?', 'Twig', '0', 'Stick', '0', 'Splinter', '1', 'Spine', '0');";
$populateTable3 = "INSERT INTO tblQuestions (question, answer_1, score_1, answer_2, score_2, answer_3, score_3, answer_4, score_4) VALUES ('The turtles share a common origin story with which superhero?', 'Batman', '0', 'Daredevil', '1', 'Superman', '0', 'Spiderman', '0');";
$populateTable4 = "INSERT INTO tblQuestions (question, answer_1, score_1, answer_2, score_2, answer_3, score_3, answer_4, score_4) VALUES ('Who is the best Ninja Turtle?', 'Leonardo', '0', 'Michealangelo', '0', 'Raphael', '1', 'Donatello', '0');";

echo "<p>";
// Execute SQL query (populate table)
if (mysqli_query($con, $populateTable1) && mysqli_query($con, $populateTable2) && mysqli_query($con, $populateTable3) && mysqli_query($con, $populateTable4)) {
  echo "Records successfully added to database.";
} else {
  echo "Error adding records to table: " . mysqli_error($con);
}
echo "</p>";

//close the connection
mysqli_close($con);

?>
</body>
</html>
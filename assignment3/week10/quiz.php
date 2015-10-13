<?
session_start();

$score=$_REQUEST['answer'];
$total=$_SESSION['total'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TMNT Quiz</title>
</head>

<body>
<?php
//connect to database
require 'dblink.php';

//Check to see if question id is set
if (isset($_GET['question'])) {

	//if it exists, get question id
	$question_id=$_GET['question'];
}
else {
	//otherwise, set question to 1
	$question_id=1;

	//reset 
	unset($_SESSION['questionlist']);
	unset($_SESSION['total']);
	unset($_SESSION['questions']);
}

//check if questionlist exists
if (!isset($_SESSION['questionlist'])) {
	
	//get a list of question ids
	$sql = "SELECT id FROM tblQuestions ORDER BY id ASC;";
	$results = mysqli_query($con,$sql);

	//set counter to start at 1
	$maxtemp = 1;

	//set temporary variable to format question id as string, as opposed to int
	$stringtemp = "";

	//use while loop to find max value
	while ($row=mysqli_fetch_array($results)) 
	{
		$maxtemp++;
		$stringtemp=$stringtemp." ".$row['id'];
	}

	//store maximum value of table in session
	$_SESSION['max']=$maxtemp;

	//set questionlist so the process is not repeated
	$_SESSION['questionlist'] = 1;

	//temporary variable called questions which will turn our id values into an array, by using the explode function 
	$_SESSION['questions']= explode(" ",$stringtemp);
}



//if questionlist exists, check if an answer has been selected
else{
	//has the user selected an answer to the last question?
	if ($score==""){
		//no answer selected
		echo "Please select an answer to the question.";
		//go back to the last question
		$question_id--;
	}
	else{
		$total=$total+$score;
		$_SESSION['total']=$total;
	}
}

//set id for next question
$next=$question_id+1;

//get maximum question value
$maxquestion=$_SESSION['max'];

	//set form action
	if ($next==$maxquestion) {
		$nextpage="result.php";
	}
	else{
		$nextpage="quiz.php?question=".$next;
	}

//go to questions array and load the one that matches the current value, or position of "question_id". It will load the array position instead of the value.
$qid = $_SESSION['questions'][$question_id];

//create sql statement
$sql="SELECT * FROM tblQuestions WHERE id='$qid';";

//execute SQL statement
$result=mysqli_query($con, $sql);

//hold results
$myrow=mysqli_fetch_array($result);

//close the connection
mysqli_close($con);
?>

<!-- setup form and use php to load question -->
<form action="<?php echo $nextpage;?>" method="post">

<h2>Question <?php echo $myrow['id']; ?></h2>
<p><?php echo $myrow['question']; ?></p>
<p>
<label><input type="radio" name="answer" value="<?php echo $myrow['score_1']; ?>" id="answer_1"><?php echo $myrow['answer_1']; ?></label><br />
<label><input type="radio" name="answer" value="<?php echo $myrow['score_2']; ?>" id="answer_2"><?php echo $myrow['answer_2']; ?></label><br />
<label><input type="radio" name="answer" value="<?php echo $myrow['score_3']; ?>" id="answer_3"><?php echo $myrow['answer_3']; ?></label><br />
<label><input type="radio" name="answer" value="<?php echo $myrow['score_4']; ?>" id="answer_4"><?php echo $myrow['answer_4']; ?></label><br />
</p>

<input type="submit">

</form>

<p><a href="/assignment3/index.html">Assignment 3 Home</a></p>

</body>
</html>
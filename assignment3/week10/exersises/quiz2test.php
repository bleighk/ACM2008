<?php
//start session
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

//check for question id in url
if (isset($_GET['question'])) {
	//if it exists, get question id
	$question_id=$_GET['question'];

}
else {
	//otherwise, start at question 1
	$question_id=1;
	
	//clear session data
	unset($_SESSION['questionlist']);
	unset($_SESSION['total']);	
}

//check if questions list has been set
if (!isset($_SESSION['questionlist'])) {
	
	//get a list of question ids
	$sql = "SELECT id FROM tblQuestions ORDER BY id ASC;";
	$results = mysqli_query($con, $sql);
	
	//set counter to start at 1
	$maxtemp = 1;
	
	//use while loop to find max value
	while ($row=mysqli_fetch_array($results)) {
		$maxtemp++;
		}
		
	//store maximum value of table in session
	$_SESSION['max']=$maxtemp;
	
	//set questionlist so the process is not repeated
	$_SESSION['questionlist'] = 1;
	

	}
//if questionlist exists, check if an answer has been selected
else {
		//has the user selected an answer to the last question?
		if ($score=="") {
			//no answer selected
			echo "Please select an answer to the question.";
		
			//go back to last question
			$question_id--;
			}
		else {
			$total=$total+$score;
			$_SESSION['total']=$total;
			}
		}



//create sql statement
$sql="SELECT * FROM tblQuestions WHERE id='$question_id';";

//execute SQL statement
$result=mysqli_query($con, $sql);

//hold results
$myrow=mysqli_fetch_array($result);

//close the connection
mysqli_close($con);

//set id for next question
$next=$question_id+1;

//get maximum question value
$maxquestion=$_SESSION['max'];

//set form action
if ($next==$maxquestion) {
	$nextpage="result.php";
}
else {
	$nextpage="quiz.php?question=".$next;
}

?>

<!-- setup form and use php to load question -->
<form action="<?php echo $nextpage; ?>" method="post">

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


</body>
</html>
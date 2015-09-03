<?php
session_start();
	$answer12=$_REQUEST['answer12'];
	$_SESSION['ses_answer12']=$answer12;

	$answer1=$_SESSION['ses_answer1'];
	$answer2=$_SESSION['ses_answer2'];
	$answer3=$_SESSION['ses_answer3'];
	$answer4=$_SESSION['ses_answer4'];
	$answer5=$_SESSION['ses_answer5'];
	$answer6=$_SESSION['ses_answer6'];
	$answer7=$_SESSION['ses_answer7'];
	$answer8=$_SESSION['ses_answer8'];
	$answer9=$_SESSION['ses_answer9'];
	$answer10=$_SESSION['ses_answer10'];
	$answer11=$_SESSION['ses_answer11'];
	$var_userName=$_SESSION['ses_userName'];

    $totalCorrect = 0;
    
    /* I have a feeling that my final results calculations could have been coded more efficiently using a loop function, or possibly an array or something. However, the code works as is, so I don't want to fix what isn't broken and tamper too much. It is something I will consider in future.*/
    if ($answer1 == "B") { 
    	$totalCorrect++; 
    }
    if ($answer2 == "B") { 
    	$totalCorrect++; 
    }
    if ($answer3 == "C") { 
    	$totalCorrect++; 
    }
    if ($answer4 == "A") { 
    	$totalCorrect++; 
    }
    if ($answer5 == "A") { 
    	$totalCorrect++; 
    }
    if ($answer6 == "C") { 
    	$totalCorrect++; 
    }
    if ($answer7 == "A") { 
    	$totalCorrect++; 
    }
    if ($answer8 == "D") { 
    	$totalCorrect++; 
    }
    if ($answer9 == "D") { 
    	$totalCorrect++; 
    }
    if ($answer10 == "C") { 
    	$totalCorrect++; 
    }
    if ($answer11 == "C") { 
    	$totalCorrect++; 
    }
    if ($answer12 == "B") { 
    	$totalCorrect++; 
    }
    echo " $totalCorrect / 12 correct!";
?>
<!DOCTYPE html>
<html>	
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>ACM2008 | s3924650 Bradley Knight | Assignment 2: PHP Quiz Results</title>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="pgesplash">
<p>
<?php
		if ($totalCorrect == 12) {
			echo "Congratulations $var_userName, has anyone ever told you that you're a really great driver?";
		} elseif (($totalCorrect >= 7) && ($totalCorrect <= 11)) {
			echo "Nice one $var_userName, you're a pretty damn solid driver. Keep it up!";
		} elseif (($totalCorrect >= 1) && ($totalCorrect <= 6)) {
			echo "Not too bad $var_userName, you sort of have an idea on what's required on Victorian roads, but I'd suggest you spend a bit more time studying. Pass.";
		} /*else ($totalCorrect <= 4) {
			echo "You have failed the test. Please try again!";
		} 

		I can not make this last line of code work at all. I keep getting:
		Parse error: syntax error, unexpected '{' in /home/cata3/public_html/assignment2/quiz/quizResults.php on line 78.

		the parse and calculations work fine when I comment the "else" out.
		*/
?>
</p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>


<a href="http://3.cata.cc/">s3924650 home</a>
<br>
<a href="http://3.cata.cc/assignment2/">Take the test again!</a>
</div>
</body>
</html>
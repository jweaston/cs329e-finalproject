<?php
session_start();

//check for timeout
if (time() - $_SESSION['start'] > 900){
	write_grade();
	echo "Time's up. Your score was ".$_SESSION['grade'].".";
	session_unset();
	session_destroy();
}

//check question 1
elseif ($_SESSION['q#'] == 'q1'){
	if ($_POST['q1'] == "false"){
		$_SESSION['grade'] = $_SESSION['grade'] + 10;
	}
	write_grade();
	$_SESSION['q#'] = "q2";
	echo "<script> window.location.href='q2.php';</script>";
}

//check question 2
elseif ($_SESSION['q#'] == 'q2'){
	if ($_POST['q2'] == "true"){
		$_SESSION['grade'] = $_SESSION['grade'] + 10;
	}
	write_grade();
	$_SESSION['q#'] = "q3";
	echo "<script> window.location.href='q3.php';</script>";
}

//check question 3
elseif ($_SESSION['q#'] == 'q3'){
	if ($_POST['q3'] =="b"){
		$_SESSION['grade'] = $_SESSION['grade'] + 10;
	}
	write_grade();
	$_SESSION['q#'] = "q4";
	echo "<script> window.location.href='q4.php';</script>";
}

//check question 4
elseif ($_SESSION['q#'] == 'q4'){
	if ($_POST['q4'] =="d"){
		$_SESSION['grade'] = $_SESSION['grade'] + 10;
	}
	write_grade();
	$_SESSION['q#'] = "q5";
	echo "<script> window.location.href='q5.php';</script>";
}

//check question 5
elseif ($_SESSION['q#'] == 'q5'){
	if (trim(strtolower($_POST['q5'])) =="agave"){
		$_SESSION['grade'] = $_SESSION['grade'] + 10;
	}
	write_grade();
	$_SESSION['q#'] = "q6";
	echo "<script> window.location.href='q6.php';</script>";
}

//check question 6
elseif ($_SESSION['q#'] == 'q6'){
	if (trim(strtolower($_POST['q6'])) =="indian pale ale"){
		$_SESSION['grade'] = $_SESSION['grade'] + 10;
	}
	write_grade();
	unset($_SESSION['q#']);
	echo "<p> Your final grade is ".$_SESSION['grade']." out of 60. <a href='../final.html'>Click here to go back</a></p>";
	session_unset();
	session_destroy();
}


//writes the final grade to results.txt
function write_grade(){
	$new_file = array();
	$file = fopen('results.txt', 'r');
	while (!feof($file)){
		$line = fgets($file);
		$line_split = preg_split('/:/', $line);
		if ($_SESSION['username'] != $line_split[0]){
			array_push($new_file, $line);
		}
	}
	fclose($file);
	
	array_push($new_file, $_SESSION['username'].':'.$_SESSION['grade']."\n");
	$file = fopen('results.txt', 'w');

	foreach ($new_file as $new_line){
		if ($new_line != "\n") {fputs($file, $new_line);}
	}
	
	fclose($file);
}
?>
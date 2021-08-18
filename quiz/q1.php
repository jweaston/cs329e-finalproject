<?php
session_start();
if ($_SESSION['q#'] != 'q1'){
	$exp = "/q\d/";
	if(preg_match($exp,$_SESSION['q#'])){
		echo "<script> alert('No going back...'); </script>";
		echo "<script> window.location.href='".$_SESSION['q#'].".php';</script>";
	}
	else{
		echo "<script> alert('You have already taken this'); </script>";
		echo "<p> Your final grade is ".$_SESSION['grade']." out of 60. <a href='../final.html'>Click here to go back</a></p>";
		die();
	}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title> Question 1 </title>
	<meta charset="UTF-8">
	<!-- <link href="./style.css" rel="stylesheet"> -->
</head>

<body>
	<form method="post" action="grader.php">
		According to Kepler the orbit of the earth is a circle with the sun at the center.<br>
        <input type="radio" name="q1" value="true" class="ans" required> True <br>
        <input type="radio" name="q1" value="false" class="ans"> False <br>
		<input type="submit" value="Submit"/>
		<input type="reset" value="Clear"/>
	</form>


</body>
</html>
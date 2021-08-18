<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title> Question 1 </title>
	<meta charset="UTF-8">
	<link href="style.css" rel="stylesheet">
</head>

<body>
	<form method="post" action="grader.php">
		Stars that live the longest have ____.<br>
			<ol type="a">
				<li>
					<input type="radio" name="q4" value="a" required > high mass
				</li>
				<li>
					<input type="radio" name="q4" value="b"> high temperature
				</li>
				<li>
					<input type="radio" name="q4" value="c"> lots of hydrogen
				</li>
				<li>
					<input type="radio" name="q4" value="d"> small mass
				</li>
			</ol>
			<input type="submit" value="Submit"/>
			<input type="reset" value="Clear"/>
	</form>
<?php
	if ($_SESSION['q#'] != 'q4'){
		echo "<script> alert('No going back...'); </script>";
		echo "<script> window.location.href='".$_SESSION['q#'].".php';</script>";
	}
?>

</body>
</html>
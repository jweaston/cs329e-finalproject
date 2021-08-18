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
		The tottal amount of energy that a star emits is directly related to its ____.<br>
		<ol type="a" >
			<li>
				<input type="radio" name="q3" value="a" required> surface gravity and magnetic field
			</li>
			<li>
				<input type="radio" name="q3" value="b" > radius and temperature
			</li>
			<li>
				<input type="radio" name="q3" value="c" > pressure and volume
			</li>
			<li>
				<input type="radio" name="q3" value="d" > location and velocity
			</li>
		</ol>
		<input type="submit" value="Submit"/>
		<input type="reset" value="Clear"/>
	</form>
<?php
	if ($_SESSION['q#'] != 'q3'){
		echo "<script> alert('No going back...'); </script>";
		echo "<script> window.location.href='".$_SESSION['q#'].".php';</script>";
	}
?>

</body>
</html>
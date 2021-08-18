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
		The type of alcohol that is found in consumable beverages is called ___.<br>
		<ol type="a" >
			<li>
				<input type="radio" name="q3" value="a" required> Methanol
			</li>
			<li>
				<input type="radio" name="q3" value="b" > Ethanol
			</li>
			<li>
				<input type="radio" name="q3" value="c" > Propanol
			</li>
			<li>
				<input type="radio" name="q3" value="d" > Butanol
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
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
		The inverse of the Hubble's constant is a measure of the ___ of the universe. <br>
        <input type="text" name="q6" size="20" required>
		<input type="submit" value="Submit"/>
		<input type="reset" value="Clear"/>
	</form>
<?php
	if ($_SESSION['q#'] != 'q6'){
		echo "<script> alert('No going back...'); </script>";
		echo "<script> window.location.href='".$_SESSION['q#'].".php';</script>";
	}
?>

</body>
</html>
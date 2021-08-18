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
		A collection of a hundred billion stars, gas, and dust is called a ____. <br>
        <input type="text" name="q5" size="20" required>
		<input type="submit" value="Submit"/>
		<input type="reset" value="Clear"/>
	</form>
<?php
	if ($_SESSION['q#'] != 'q5'){
		echo "<script> alert('No going back...'); </script>";
		echo "<script> window.location.href='".$_SESSION['q#'].".php';</script>";
	}
?>

</body>
</html>
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
		Acient astronomers did consider the heliocentric model of the solar system bu rejected it because they could not dected
        parallax.<br>
        <input type="radio" name="q2" value="true" class="ans" required> True <br>
        <input type="radio" name="q2" value="false" class="ans"> False <br>
 		<input type="submit" value="Submit"/>
		<input type="reset" value="Clear"/>
	</form>
<?php
	if ($_SESSION['q#'] != 'q2'){
		echo "<script> alert('No going back...'); </script>";
		echo "<script> window.location.href='".$_SESSION['q#'].".php';</script>";
	}
?>

</body>
</html>
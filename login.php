<?php
	session_start();
	error_reporting(E_ALL);
    ini_set("display_errors", "on");

    $server = "localhost";
    $user = "cs329e_mitra_jweaston";
    $password = "Know2tally9Chief";
    $dbName = "cs329e_mitra_jweaston";
    $database = new mysqli($server, $user, $password, $dbName);

    $u_name = $_REQUEST['user'];
	$u_name = $database->real_escape_string($u_name);
    $p_word = $_REQUEST['pass'];
	$p_word = $database->real_escape_string($p_word);

	$usr_exists = false;
	$pw_correct = false;

	$command = "SELECT * FROM final_passwd";
    $result = $database->query($command);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["u_name"] === $u_name){
                $usr_exists = true;
				if ($row["p_word"] === $p_word){
					$pw_correct = true;
				}
				break;
            } 
        } 
    } 

	if ($usr_exists){
		if ($pw_correct){
			setcookie('logged_in', true, time() + 3600, '/');
			setcookie('user', $u_name, time() + 3600, '/');
			echo "You've successfully logged in!";
			$_SESSION['username'] = $u_name;
			$_SESSION['start'] = time();
			$_SESSION['q#'] = "q1";
			$_SESSION['grade'] = 0;
		}
		else {
			echo "Error: Incorrect password.";
		}
	}
	else { echo "Error: User not found."; }
	
?>

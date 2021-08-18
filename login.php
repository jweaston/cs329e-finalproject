<?php
	error_reporting(E_ALL);
    ini_set("display_errors", "on");

    $server = "localhost";
    $user = "cs329e_mitra_jweaston";
    $password = "Know2tally9Chief";
    $dbName = "cs329e_mitra_jweaston";
    $database = new mysqli($server, $user, $password, $dbName);

    $u_name = stripInput($_REQUEST['user']);
    $p_word = stripInput($_REQUEST['pass']);

	$usr_exists = false;
	$pw_correct = false;


	//prevent XSS
	function stripInput($input) {
		return htmlentities($input, ENT_NOQUOTES);
	}


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
			
		}
		else {
			echo "Error: Incorrect password.";
		}
	}
	else { echo "Error: User not found."; }
	
?>

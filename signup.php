<?php 
    error_reporting(E_ALL);
    ini_set("display_errors", "on");

    $server = "localhost";
    $user = "cs329e_mitra_jweaston";
    $password = "Know2tally9Chief";
    $dbName = "cs329e_mitra_jweaston";
    $database = new mysqli($server, $user, $password, $dbName);

    $u_name = $_REQUEST['username'];
    $p_word = $_REQUEST['password'];
	$u_name = $database->real_escape_string($u_name);
	$p_word = $database->real_escape_string($p_word);


    $command = "SELECT * FROM final_passwd WHERE u_name = '$u_name'";
    $query = $database->query($command);

    if ($query->num_rows == 0){
        $command = "INSERT INTO final_passwd VALUES ('$u_name','$p_word')";
        $database->query($command) or die($database->error);
        echo "registered";
        echo "You have been registered";
    }
    else {
        echo "This username already exist";
    }
?>
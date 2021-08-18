<?php
    $server = "localhost";
    $sql_user = "cs329e_mitra_jweaston";
    $password = "Know2tally9Chief";
    $dbName = "cs329e_mitra_jweaston";
    $database = new mysqli($server, $sql_user, $password, $dbName);

    $found = false;

    $user = $_REQUEST["username"];

    $command = "SELECT * FROM final_passwd";
    $result = $database->query($command);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row["u_name"] === $user){
                $found = true;
                break;
          } 
        } 
    } 
    if ($found) {
        echo("username is already taken");
        //echo "<script> window.location.href='register_page.html'; alert('Username is in use') </script>";
    }
?>
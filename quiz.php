<?php
    #if cookie is already set, send to "already responded" page
    if (isset($_COOKIE["quiz"])) {
        header("Location: responded.html");
    }
?>

<html lang=en>
    <head>
        <meta charset="utf-8">
        <title>Favorite Drink</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
            <a href="final.html"><img alt="logo" src="images/Website_logo.png" width="160"></a>
            <h1>
                Drunk on Knowledge
            </h1>
            <div class="navRow">
                <a href="history_page.html" target="_self">History</a>
                <a href="science_page.html" target="_self">Science</a>
                <a href="culture_page.php" target="_self">Culture</a>
                <a href="contacts.html" target="_self">Contact Us</a><br>
            </div>
        </header>
        <div id="drinkquiz">
        <form method="get" action = "">
            <label for="drink">MY FAVORITE DRINK IS...</label><br>
            <input type="text" id="drink" name="drink">
            <input type="submit">
        </form>
</div>

        <?php 
        
        $drinkinput = $_GET["drink"];
        if ($drinkinput != '') {
            setcookie("quiz", "taken");
        }

        ?>

        <footer class='footer'>
            <p>Moonshiners: Drunk on Knowledge &copy;<br>
            James Easton & Erica McCarty<br>
            July 19, 2021</p>
        </footer>
        
    </body>
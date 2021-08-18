<!DOCTYPE html>


<html lang=en>
    <head>
        <meta charset="utf-8"/>
        <title>Drunk on Knowledge</title>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="final.js"></script>
        <link href="style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    
    <body style="min-height: 1900px;">   
    <header>
            <table id="account">
                <tr><td><div class="dropdown" id='logindiv' style="float:right;">
                    <button class="dropbtn" style="font-size:12pt" onclick="show_login()"> Log In </button>
                    <div id="login" class="dropdown-content" style="right:0">
                        <form method="POST" class="topbtn safe" name="login" id="loginform">
                            <label id="username" class="safe"> Username: <input name="username" type="text" id="user" class="safe"/></label>
                            <label id="password" class="safe"> Password: <input name="password" type="password" id="pass" class="safe"/></label>
                            <p><input type="submit" value="Enter" class="safe"/> <input type="reset" value="Clear" class="safe"/></p>
                        </form>
                    </div>
                </div></td>
                
                <td><div class="dropdown" id='signupdiv' style="float:right;">
                    <button class="dropbtn" style="font-size:12pt" onclick="show_signup()"> Sign Up </button>
                    <div id="signup" class="dropdown-content" style="right:0">
                        <form method="POST" class="topbtn safe" name="signup" id="signupform">
                            <label class="safe"> Username: <input type="text" id="new_username" name="new_pass" class="safe"/></label>
                            <span style="font-size:10pt;" class="safe"> (6-10 Alphanumeric characters) </span><br><br>
                            <label class="safe"> Password: <input type="password" id="new_password" name="new_pass" class="safe"/></label>
                            <span style="font-size:10pt;" class="safe"> (6-10 Alphanumeric characters, must have 1 uppercase, 1 lowercase, 1 number) </span><br><br>
                            <label class="safe"> Re-Enter Password: <input type="password" id="re_password" name="re_pass" class="safe"/></label>
                            <p><input type="submit" value="Enter" class="safe" /> <input type="reset" value="Clear" class="safe"/></p>
                        </form>
                    </div>
                </div></td></tr>
        
                <tr><td colspan=2><div id="signout" class="signout topbtn safe" style="float:right;">
                    <button style="font-size:12pt" onclick="logout();"> Sign Out </button>
                </div></td></tr>
            </table>

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
        <div class="content">

            <div class="map">
                <img src="images/worldmap.png" alt="map">
                <input type="button" class="mapbutton" id="northamerica" value=''>
                <input type="button" class="mapbutton" id="southamerica">
                <input type="button" class="mapbutton" id="europe">
                <input type="button" class="mapbutton" id="asia">
                <input type="button" class="mapbutton" id="australia">
                <input type="button" class="mapbutton" id="africa">
                <p id="continentname">Continent:</p>
                <p id="blurb"></p>
            </div>

            <h2>
                How Vodka Ruined Russia
            </h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/vK7l55ZOVIc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <h2>
                Apple Jack Moonshine
            </h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/rwEwVflru_g" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p id="quizLink">Click <a href="quiz.php"> here </a>to vote for your favorite alcoholic beverage </p>

        </div>


        <footer class='footer'>
            <p>Moonshiners: Drunk on Knowledge &copy;<br>
            James Easton & Erica McCarty<br>
            July 19, 2021</p>
        </footer>

     

        <script>
            let continentname = document.getElementById("continentname");
            let blurb = document.getElementById("blurb");

            let northamerica = document.getElementById("northamerica");
            northamerica.onclick = northamericaInfo;
            function northamericaInfo () {
                continentname.innerHTML = "Continent: North America";
                blurb.innerHTML = "Europeans introduced alcohol to American Indians as an instrument of trade and diplomacy. By the time the Great Plains were being settled by Europeans, virtually all treaty negotiations included complex and subtle uses of alcohol, and alcohol even became a bargaining chip.";
            }

            let southamerica = document.getElementById("southamerica");
            southamerica.onclick = southamericaInfo;
            function southamericaInfo () {
                continentname.innerHTML = "Continent: South America";
                blurb.innerHTML = "Whether it is Mexican tequila, Brazilian cachaça, or Patagonian wine, Latin American alcoholic beverages have become internationally renowned for their quality and taste. Within the region, these kinds of drinks are widely consumed. In fact, Brazil and Mexico rank among the leading alcohol consumers in the world, and along with Argentina are expected to be part of the ten largest alcohol markets by 2027. When it comes to per capita values, however, the country with the highest level of consumption in the region is Uruguay, with a total of nearly 11 liters consumed per person every year.";
            }

            let africa = document.getElementById("africa");
            africa.onclick = africaInfo;
            function africaInfo () {
                continentname.innerHTML = "Continent: Africa";
                blurb.innerHTML = "Africa is home to 16% of the world's population but consumes just 5% of the world's beverage alcohol. That low per capita consumption translates into considerable potential. A hot climate might be expected to exaggerate the demand for beer and big brewers are investing for the future.";
            }

            let europe = document.getElementById("europe");
            europe.onclick = europeInfo;
            function europeInfo () {
                continentname.innerHTML = "Continent: Europe";
                blurb.innerHTML = "People in the European Union consume more alcohol than in any other part of the world, drinking an average of 8.71 liters, or around 25 beer-sized glasses of pure alcohol, per person a year, according to the latest European health report from the World Health Organization. ";
            }

            let asia = document.getElementById("asia");
            asia.onclick = asiaInfo;
            function asiaInfo () {
                continentname.innerHTML = "Continent: Asia";
                blurb.innerHTML = "While Asia boasts an array of ingredients in its liquor, there seems to be one integral component found in many alcohol types across Asia: rice. This makes sense, considering rice is a staple in Asia. Around 90 percent of the world’s rice is produced and consumed in the Asia-Pacific region alone.";
            }

            let australia = document.getElementById("australia");
            australia.onclick = australiaInfo;
            function australiaInfo () {
                continentname.innerHTML = "Continent: Australia";
                blurb.innerHTML = "Australia has a hard-drinking reputation forged from its early days as a British penal colony, where rum was used as a de facto currency alongside English guineas and Indian rupees. While it's far from the top of global alcohol consumption league tables, Australia can be a thirsty place. Booze is socially acceptable, easy to buy and relatively cheap. Major Australian brewers are reporting an 'explosion' in the popularity of non-alcoholic beer.";

            }
        </script>






    </body>
</html>
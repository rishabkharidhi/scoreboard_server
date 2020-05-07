<!DOCTYPE html>

<html lang="en">
    <title> Scoreboard: CYBR 5350-001, 001B, 570: Security Audit. & Pen. Testing</title>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" media="all" href="w3.css"/>
        <link rel="stylesheet" media="all" href="google_api.css"/>
    <style>
        body,h1,h5 {font-family: "Raleway", sans-serif}
        body, html {height: 100%}
        .bgimg {
            background-image: url('bckgnd.jpg');
            min-height: 100%;
            background-position: center;
            background-size: cover;
        }
    </style>
    <body>
        <div class="bgimg w3-display-container w3-text-white">
            <div class="w3-display-middle w3-jumbo">
                <p>CYBR 5350-001, 001B, 570: Security Audit. & Pen. Testing</p>
            </div>
            <div class="w3-display-topleft w3-container w3-xlarge">
                <p>
                    <button onclick="document.getElementById('scoreboard').style.display='block'" class="w3-button w3-black">Scoreboard</button>
                </p>
                <p>
                    <button onclick="document.getElementById('submit_flag').style.display='block'" class="w3-button w3-black">Submit Flag</button>
                </p>
            </div>
            <div class="w3-display-bottomleft w3-container">
                <p class="w3-xlarge">Dr. Aaron J. Hansen</p>
                <p class="w3-large">University of Colorado Boulder</p>
            </div>
        </div>
        
        <!-- Scoreboard-->
        <div id="scoreboard" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-black w3-display-container">
                    <span onclick="document.getElementById('scoreboard').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>

                </div>
            </div>
        </div>
        
        <div id="submit_flag" class="w3-modal">
            <div class="w3-modal-content w3-animate-zoom">
                <div class="w3-container w3-black">
                    <span onclick="document.getElementById('submit_flag').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                    <h1>Submit</h1>
                </div>
                <div class="w3-container">
                    <p>User ID is the same as your systems name Example: abcd1234</p>
                    <form action="submit_flag.php" method="post" >
                        <p>
                            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="User ID" required id="userid">
                        </p>
                        <p>
                            <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Flag Found" required id="flag">
                        </p>
                        <p>
                        <button class="w3-button" type="submit"> SUBMIT</button>
                        </p>
                    </form>
                </div> 
            </div>
        </div>
    
    </body>
</html>


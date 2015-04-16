<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
sec_session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>testFredag</title>
    <link type="text/css" rel="stylesheet" href="kommunvyNyHeader.css">

</head>

<body>
    
<div id="header-container">
    <div class="container">
        <form class="searchbar">
            <input type="text" class="searchbar knapp" value="Seach on Uppsala.se"/>
        </form>

        <img id="kommunLogga" src="https://www.uppsala.se/Content/Images/logo_neg.png" alt="Uppsala kommuns logotyp">

        <div id="topMenu" role="navigation">
            <div><a class="rubriker" href="anvsida_.html">Map</a></div>
            <div><a class="rubriker" href="IssueReport.html">Issues</a></div>
            <div><a class="rubriker" href="IssueReport.html">Contact</a></div>
            <div><a class="rubriker" href="IssueReport.html">Language</a></div>
        </div>



    </div>
</div>
<div class="container">


<div class="content">

    <?php if (login_check($mysqli) == true) : ?>

    <div class="btn">
        <a href="registerAsAdmin.php">
            <button class="knappar" id="hej2">
                <p class="knappText">Lägg till ny användare</button>
        </a>
    </div>

    <div class="btn">
        <button class="knappar" id="hej2">
            <p class="knappText">Supersak 1</p></button>
    </div>

    <div class="btn">

        <button class="knappar" id="hej3">
            <p class="knappText">Ändra något annat</p></button>
    </div>

    <div class="btn">
        <button class="knappar" id="hej4">
            <p class="knappText" >Bra grej</p></button>
    </div>  

    <div class="btn">
        <a href="deleteMeny.php">
            <button class="knappar" id="hej5">
                <p class="knappText">Ta bort användare</p></button>
        </a>
    </div>
<div class="btn">
        <a href="kommunvyNyHeader.php">
        <button class="knappar" id="hej6">
            <p class="knappText">Gå tilbaka</p></button>
        </a>
    </div>
    <p>Return to <a href="kommunvyNyHeader.php">kommun page</a></p>
    <p>Return to <a href="index.php">login page</a></p>
        <?php else : ?>
            <div>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </div>
        <?php endif; ?>

</div>
</div>
</body>


</html>
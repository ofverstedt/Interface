<?php
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="styles/main.css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
        <link type="text/css" rel="stylesheet" href="kommunvyNyHeader.css">
    </head>
    <body>
        <div id="header-container">
    <div class="container">
        <form class="searchbar">
            <input type="text" class="searchbar knapp" value="Seach on Uppsala.se"/>
        </form>

        <img id="kommunLogga" src="https://www.uppsala.se/Content/Images/logo_neg.png" alt="Uppsala kommuns logotyp">


    </div>
</div>
<div class="container">


    <div class="content">
        <div class="login">

            <?php
            if (isset($_GET['error'])) {
                echo '<p class="error">Error Logging In!</p>';
            }
            ?> 
            <form action="../includes/process_login.php" method="post" name="login_form">                      
                Email: <input type="text" name="email" />
                Password: <input type="password" 
                                 name="password" 
                                 id="password"/>
                <input type="button" 
                       value="Login" 
                       onclick="formhash(this.form, this.form.password);" /> 
            </form>
     
    <?php
            if (login_check($mysqli) == true) {
                            echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
     
                echo '<p>Do you want to change user? <a href="../includes/logout.php">Log out</a>.</p>';
            } else {
                            echo '<p>Currently logged ' . $logged . '.</p>';
                            echo "<p>If you don't have a login, please <a href='register.php'>register</a></p>";
                    }
    ?>   
        </div>
    </div>
</div>   
    </body>
</html>

<?php
include_once '../includes/deleteRow.php';
include_once '../includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
        <link rel="stylesheet" href="styles/main.css" />
    </head>
    <body>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Delete one</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            
            <li>Enter the E-mail of the user you want to delete</li>
            
        </ul>

        <!-- Creates the form where we enter the E-mail -->

        <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>" 
                method="post" 
                name="registration_form">
            Email: <input type="text" name="email" id="email" /><br>

            <!-- Submits the form, going the deleteRow.php -->

            <input type="submit" 
                   value="DELETE IT!!!"  /> 
        </form>
        <p>Return to the <a href="admin.php">admin page</a>.</p>
    </body>
</html>

<?php
include_once 'db_connect.php';
include_once 'psl-config.php';
 
$error_msg = "";
    
if (isset($_POST['email'])) {
    // Sanitize and validate the data passed in
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);


    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Not a valid email
        $error_msg .= '<p class="error">The email address you entered is not valid</p>';
    }


    if (empty($error_msg)) {


 
        // Insert the new user into the database 
        if ($insert_stmt = $mysqli->prepare("DELETE FROM members WHERE email=?")) {
            $insert_stmt->bind_param('s', $email);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../public/error.php?err=Registration failure: INSERT');
            }
        }
        
         header('Location: ../public/deleteSuccess.php');
    }
}

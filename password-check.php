<?php
    require "password.php";

    // Setup
    $success = false;

    // Helper function for sending response
    function sendResponse($success, $message){
        $data = [ 'success' => $success, 'message' => $message ];
        echo json_encode( $data );
        exit;
    }

    // Required fields
    $required_fields = array("password");

    // Check empty fields here
    foreach ($required_fields as $field) {
        if (!strlen($_POST[$field])) {
            $success = false;
            $message = "Please make sure the $field field isn't ' empty";
            sendResponse($success, $message);
        }
    }

    if ($_POST["password"] != $password)
    {
        $success = false;
        $message = "Wrong password!";
        sendResponse($success, $message);
    }

    // SUCCESS
    $success = true;
    $message = "Thanks for RSVPing!";
    sendResponse($success, $message);
?>

<?php
    $success = false;

    function sendResponse($success, $message){
        $data = [ 'success' => $success, 'message' => $message ];
        echo json_encode( $data );
        exit;
    }

    if(!isset($_POST["name"]) || empty($_POST["name"])) {
        $sucesss = false;
        $message = "Please enter a name";
        sendResponse($success, $message);
    }

    if (!isset($_POST["email"]) || empty($_POST["email"])) {
        $sucesss = false;
        $message = "Please enter an email";
        sendResponse($success, $message);
    }

    // TODO: Create database entry
    $success = true;
    $message = "Thanks for RSVPing!";
    sendResponse($success, $message);
?>
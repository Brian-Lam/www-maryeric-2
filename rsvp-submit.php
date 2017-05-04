<?php
    require "db.php";

    // Setup
    $success = false;

    // Helper function for sending response
    function sendResponse($success, $message){
        $data = [ 'success' => $success, 'message' => $message ];
        echo json_encode( $data );
        exit;
    }

    // Required fields
    $required_fields = array("name", "attending", "menu", "shuttle", "breakfast", "comments");

    // Check empty fields here
    foreach ($require_fields as $field) {
        if (!strlen($_POST[$field])) {
            $success = false;
            $message = "Please make sure the $field field isn't ' empty";
            sendResponse($success, $message);
        }
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
	$success = false;
	$message = "Connected failed: " . $conn->connect_error;
        sendResponse($success, $message);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO RSVP (name, attending, menu, shuttle, breakfast, comments) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $attending, $menu, $shuttle, $breakfast, $comments);

    // set parameters and execute
    $name = $_POST["name"];
    $attending = $_POST["attending"];
    $menu = $_POST["menu"];
    $shuttle = $_POST["shuttle"];
    $breakfast = $_POST["breakfast"];
    $comments = $_POST["comments"];

    $stmt->execute();
    $stmt->close();
    $conn->close();

    // SUCCESS
    $success = true;
    $message = "Thanks for RSVPing!";
    sendResponse($success, $message);
?>

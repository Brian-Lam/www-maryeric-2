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
    $required_fields = array("name-1", "attending-1", "menu-1", "shuttle-1");

    // Check empty fields here
    foreach ($required_fields as $field) {
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
    $stmt = $conn->prepare("INSERT INTO RSVP (count, name1, attending1, menu1, shuttle1, comments1, name2, attending2, menu2, shuttle2, comments2, name3, attending3, menu3, shuttle3, comments3, name4, attending4, menu4, shuttle4, comments4, name5, attending5, menu5, shuttle5, comments5) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("isssssssssssssssssssssssss", $count, $name1, $attending1, $menu1, $shuttle1, $comments1, $name2, $attending2, $menu2, $shuttle2, $comments2, $name3, $attending3, $menu3, $shuttle3, $comments3, $name4, $attending4, $menu4, $shuttle4, $comments4, $name5, $attending5, $menu5, $shuttle5, $comments5);

    // set parameters and execute
    $count = $_POST["partycount"];

    $name1 = $_POST["name-1"];
    $attending1 = $_POST["attending-1"];
    $menu1 = $_POST["menu-1"];
    $shuttle1 = $_POST["shuttle-1"];
    $comments1 = $_POST["comments-1"];

    $name2 = $_POST["name-2"];
    $attending2 = $_POST["attending-2"];
    $menu2 = $_POST["menu-2"];
    $shuttle2 = $_POST["shuttle-2"];
    $comments2 = $_POST["comments-2"];

    $name3 = $_POST["name-3"];
    $attending3 = $_POST["attending-3"];
    $menu3 = $_POST["menu-3"];
    $shuttle3 = $_POST["shuttle-3"];
    $comments3 = $_POST["comments-3"];

    $name4 = $_POST["name-4"];
    $attending4 = $_POST["attending-4"];
    $menu4 = $_POST["menu-4"];
    $shuttle4 = $_POST["shuttle-4"];
    $comments4 = $_POST["comments-4"];

    $name5 = $_POST["name-5"];
    $attending5 = $_POST["attending-5"];
    $menu5 = $_POST["menu-5"];
    $shuttle5 = $_POST["shuttle-5"];
    $comments5 = $_POST["comments-5"];

    $stmt->execute();
    $stmt->close();
    $conn->close();

    // SUCCESS
    $success = true;
    $message = "Thanks for RSVPing!";
    sendResponse($success, $message);
?>

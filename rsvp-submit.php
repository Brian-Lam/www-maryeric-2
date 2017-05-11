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

    function getResponseField($fieldname)
    {
        if (isset($_POST[$fieldname]))
        {
            return $_POST[$fieldname];
        }

        return "";

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
    $stmt = $conn->prepare("INSERT INTO RSVP (count, name1, attending1, menu1, shuttle1, comments1, dietary1, name2, attending2, menu2, shuttle2, comments2, dietary2, name3, attending3, menu3, shuttle3, comments3, dietary3, name4, attending4, menu4, shuttle4, comments4, dietary4, name5, attending5, menu5, shuttle5, comments5, dietary5)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("issssssssssssssssssssssssssssss", $count, $name1, $attending1, $menu1, $shuttle1, $comments1, $dietary1, $name2, $attending2, $menu2, $shuttle2, $comments2, $dietary2, $name3, $attending3, $menu3, $shuttle3, $comments3, $dietary3, $name4, $attending4, $menu4, $shuttle4, $comments4, $dietary4, $name5, $attending5, $menu5, $shuttle5, $comments5, $dietary5);

    // set parameters and execute
    $count = getResponseField("partycount");

    $name1 = getResponseField("name-1");
    $attending1 = getResponseField("attending-1");
    $menu1 = getResponseField("menu-1");
    $shuttle1 = getResponseField("shuttle-1");
    $comments1 = getResponseField("comments-1");
    $dietary1 = getResponseField("dietary-1");

    $name2 = getResponseField("name-2");
    $attending2 = getResponseField("attending-2");
    $menu2 = getResponseField("menu-2");
    $shuttle2 = getResponseField("shuttle-2");
    $comments2 = getResponseField("comments-2");
    $dietary2 = getResponseField("dietary-2");

    $name3 = getResponseField("name-3");
    $attending3 = getResponseField("attending-3");
    $menu3 = getResponseField("menu-3");
    $shuttle3 = getResponseField("shuttle-3");
    $comments3 = getResponseField("comments-3");
    $dietary3 = getResponseField("dietary-3");

    $name4 = getResponseField("name-4");
    $attending4 = getResponseField("attending-4");
    $menu4 = getResponseField("menu-4");
    $shuttle4 = getResponseField("shuttle-4");
    $comments4 = getResponseField("comments-4");
    $dietary4 = getResponseField("dietary-4");

    $name5 = getResponseField("name-5");
    $attending5 = getResponseField("attending-5");
    $menu5 = getResponseField("menu-5");
    $shuttle5 = getResponseField("shuttle-5");
    $comments5 = getResponseField("comments-5");
    $dietary5 = getResponseField("dietary-5");

    $stmt->execute();
    $stmt->close();
    $conn->close();

    // SUCCESS
    $success = true;
    $message = "Thanks for RSVPing!";
    sendResponse($success, $message);
?>

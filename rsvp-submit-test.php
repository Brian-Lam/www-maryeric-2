<?php
    require "db.php";
    require "password.php";

    // Setup
    $success = false;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
	$success = false;
	$message = "Connected failed: " . $conn->connect_error;
        sendResponse($success, $message);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO RSVP (count, name1, attending1, menu1, shuttle1, contact1, comments1, dietary1, name2, attending2, menu2, shuttle2, contact2, comments2, dietary2, name3, attending3, menu3, shuttle3, contact3, comments3, dietary3, name4, attending4, menu4, shuttle4, contact4, comments4, dietary4, name5, attending5, menu5, shuttle5, contact5, comments5, dietary5)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    
    $stmt->bind_param("isssssssssssssssssssssssssssssssssss", $count, $name1, $attending1, $menu1, $shuttle1, $contact1, $comments1, $dietary1, $name2, $attending2, $menu2, $shuttle2, $contact2, $comments2, $dietary2, $name3, $attending3, $menu3, $shuttle3, $contact3, $comments3, $dietary3, $name4, $attending4, $menu4, $shuttle4, $contact4, $comments4, $dietary4, $name5, $attending5, $menu5, $shuttle5, $contact5, $comments5, $dietary5);

    // set parameters and execute
    $count = 5;

    $name1 = "name-1";
    $attending1 = "attending-1";
    $menu1 = "menu-1";
    $shuttle1 = "shuttle-1";
    $comments1 = "comments-1";
    $contact1 = "contact-1";
    $dietary1 = "dietary-1";

    $name2 = "name-2";
    $attending2 = "attending-2";
    $menu2 = "menu-2";
    $shuttle2 = "shuttle-2";
    $contact1 = "contact-2";
    $comments2 = "comments-2";
    $dietary2 = "dietary-2";

    $name3 = "name-3";
    $attending3 = "attending-3";
    $menu3 = "menu-3";
    $shuttle3 = "shuttle-3";
    $contact1 = "contact-3");   
    $comments3 = "comments-3";
    $dietary3 = "dietary-3";

    $name4 = "name-4";
    $attending4 = "attending-4";
    $menu4 = "menu-4";
    $shuttle4 = "shuttle-4";
    $contact1 = "contact-4";
    $comments4 = "comments-4";
    $dietary4 = "dietary-4";

    $name5 = "name-5";
    $attending5 = "attending-5";
    $menu5 = "menu-5";
    $shuttle5 = "shuttle-5";
    $contact1 = "contact-5";
    $comments5 = "comments-5";
    $dietary5 = "dietary-5";

    $stmt->execute();
    $stmt->close();
    $conn->close();

    // SUCCESS
    echo "success";
?>

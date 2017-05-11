<?php
    require "db.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    function displayRow($row, $name)
    {
        echo "$name: " . $row[$name] . "<br>";
    }

    $sql = "SELECT count, name1, attending1, menu1, shuttle1, comments1, dietary1, name2, attending2, menu2, shuttle2, comments2, dietary2, name3, attending3, menu3, shuttle3, comments3, dietary3, name4, attending4, menu4, shuttle4, comments4, dietary4, name5, attending5, menu5, shuttle5, comments5, dietary5 FROM RSVP";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            displayRow($row, "count");
            displayRow($row, "name1");
            displayRow($row, "attending1");
            displayRow($row, "menu1");
            displayRow($row, "shuttle1");
            displayRow($row, "comments1");
            displayRow($row, "dietary1");
            displayRow($row, "name2");
            displayRow($row, "attending2");
            displayRow($row, "menu2");
            displayRow($row, "shuttle2");
            displayRow($row, "comments2");
            displayRow($row, "dietary2");
            displayRow($row, "name3");
            displayRow($row, "attending3");
            displayRow($row, "menu3");
            displayRow($row, "shuttle3");
            displayRow($row, "comments3");
            displayRow($row, "dietary3");
            displayRow($row, "name4");
            displayRow($row, "attending4");
            displayRow($row, "menu4");
            displayRow($row, "shuttle4");
            displayRow($row, "comments4");
            displayRow($row, "dietary4");
            displayRow($row, "name5");
            displayRow($row, "attending5");
            displayRow($row, "menu5");
            displayRow($row, "shuttle5");
            displayRow($row, "comments5");
            displayRow($row, "dietary5");
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
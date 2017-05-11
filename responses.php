<?php

    function displayRow($name)
    {
        echo "$name: " . $row[$name] . "<br>";
    }

    $sql = "SELECT count, name1, attending1, menu1, shuttle1, comments1, dietary1, name2, attending2, menu2, shuttle2, comments2, dietary2, name3, attending3, menu3, shuttle3, comments3, dietary3, name4, attending4, menu4, shuttle4, comments4, dietary4, name5, attending5, menu5, shuttle5, comments5, dietary5 FROM RSVP";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            displayRow("count");
            displayRow("name1");
            displayRow("attending1");
            displayRow("menu1");
            displayRow("shuttle1");
            displayRow("comments1");
            displayRow("dietary1");
            displayRow("name2");
            displayRow("attending2");
            displayRow("menu2");
            displayRow("shuttle2");
            displayRow("comments2");
            displayRow("dietary2");
            displayRow("name3");
            displayRow("attending3");
            displayRow("menu3");
            displayRow("shuttle3");
            displayRow("comments3");
            displayRow("dietary3");
            displayRow("name4");
            displayRow("attending4");
            displayRow("menu4");
            displayRow("shuttle4");
            displayRow("comments4");
            displayRow("dietary4");
            displayRow("name5");
            displayRow("attending5");
            displayRow("menu5");
            displayRow("shuttle5");
            displayRow("comments5");
            displayRow("dietary5");
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
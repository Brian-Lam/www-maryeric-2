<!DOCTYPE HTML>
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</head>
<body>
<?php
    require "db.php";

    $conn = new mysqli($servername, $username, $password, $dbname);

    function displayColumn($row, $name)
    {
        echo "<td>" . $row[$name] . "</td>\n";
    }

    function beginRow()
    {
        echo "<tr>";
    }

    function endRow()
    {
        echo "</tr>";
    }


    $sql = "SELECT id, time, count, name1, attending1, menu1, shuttle1, contact1, comments1, dietary1, name2, attending2, menu2, shuttle2, contact2, comments2, dietary2, name3, attending3, menu3, shuttle3, contact3, comments3, dietary3, name4, attending4, menu4, shuttle4, contact4, comments4, dietary4, name5, attending5, menu5, shuttle5, contact5, comments5, dietary5 FROM RSVP";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<table class='striped'>
        <thead>
          <tr>
              <th>Reply ID</th>
              <th>Date</th>
              <th>Name</th>
              <th>Attending</th>
              <th>Menu</th>
              <th>Shuttle</th>
              <th>Comments</th>
              <th>Contact</th>
              <th>Dietary</th>
          </tr>
        </thead>";
        while($row = $result->fetch_assoc()) {
            $count = $row["count"];

            beginRow();
            displayColumn($row, "id");
            displayColumn($row, "time");
            displayColumn($row, "name1");
            displayColumn($row, "attending1");
            displayColumn($row, "menu1");
            displayColumn($row, "shuttle1");
            displayColumn($row, "dietary1");
            displayColumn($row, "contact1");
            displayColumn($row, "comments1");
            endRow();

            if ($count >= 2) 
            {
                beginRow();
                displayColumn($row, "id");
                displayColumn($row, "time");
                displayColumn($row, "name2");
                displayColumn($row, "attending2");
                displayColumn($row, "menu2");
                displayColumn($row, "shuttle2");
                displayColumn($row, "dietary2");
                displayColumn($row, "contact2");
                displayColumn($row, "comments2");
                endRow();
            }

            if ($count >= 3) 
            {
                beginRow();
                displayColumn($row, "id");
                displayColumn($row, "time");
                displayColumn($row, "name3");
                displayColumn($row, "attending3");
                displayColumn($row, "menu3");
                displayColumn($row, "shuttle3");
                displayColumn($row, "dietary3");
                displayColumn($row, "contact3");
                displayColumn($row, "comments3");
                endRow();
            }
            
            if ($count >= 4) 
            {
                beginRow();
                displayColumn($row, "id");
                displayColumn($row, "time");
                displayColumn($row, "name4");
                displayColumn($row, "attending4");
                displayColumn($row, "menu4");
                displayColumn($row, "shuttle4");
                displayColumn($row, "dietary4");
                displayColumn($row, "contact4");
                displayColumn($row, "comments4");
                endRow();
            }

            if ($count >= 5) 
            {
                beginRow();
                displayColumn($row, "id");
                displayColumn($row, "time");
                displayColumn($row, "name5");
                displayColumn($row, "attending5");
                displayColumn($row, "menu5");
                displayColumn($row, "shuttle5");
                displayColumn($row, "dietary5");
                displayColumn($row, "contact5");
                displayColumn($row, "comments5");
                endRow();
            }           
        }
        echo "</table>";
    }
    $conn->close();
?>
</body>
</html>
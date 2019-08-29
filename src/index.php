<?php
$servername = "db";
$username = "root";
$password = "rootpass";
$dbname = "shoppinglists";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO ShoppingLists (name)
VALUES ('Office')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT name FROM ShoppingLists";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>
<html>
  <body>
    <h1> Shopping list </h1>
      <ul>
        <li> Soy milk </li>
      </ul>
  </body>
</html>

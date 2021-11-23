<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"test");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$dest = $_GET["dest"];
$people = $_GET["people"];
$arrival = $_GET["arrival"];
$leaving = $_GET["leaving"];
$sql = "INSERT INTO requests (destination, people, leaving, arrival)
VALUES ('$dest', $people, '$leaving', '$arrival')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
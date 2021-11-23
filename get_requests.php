<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- custom css file link  -->
     <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!--  Modal -->
 <div id="contactModal" class="modal">
    <div class="modal-content">
        <div class="info">
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
   $sql="select * from requests";
   $result = $conn->query($sql);
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   ?><p class="display"><?php echo "To: " . $row["destination"]. " - Number of people: " . $row["people"]. " - Leaving: " . $row["leaving"]." - Arrival: " . $row["arrival"]. "<br>";?></p><?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();

    ?>
        </div>
        </div>
    </div>
</div> 
<!-- End of  Modal -->
</body>
</html>
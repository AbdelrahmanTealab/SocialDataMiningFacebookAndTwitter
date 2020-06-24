<?php 
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "";
  
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM Facebook";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "<div class=\" w3-container w3-margin-bottom\"  style=\"background-color:#3b5998;\">
              <div class=\"w3-container w3-white\" style=\"text-align:center; border-radius:30px;\"> 
                <p><b>".$row["message"]."</b></p>
                <p style=\"font-size:12px\"><b>By:</b>Abdelrahman Tealab</p>
                <p style=\"font-size:12px\"><b>Date:</b>".$row["created_time"]."</p>
                <p style=\"font-size:12px\"><b>ID:</b>".$row["id"]."
              </div>
            </div>";
            }
          } else {
            echo "0 results";
          } 
  ?>
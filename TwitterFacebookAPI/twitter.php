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
$sql2 = "SELECT * FROM Twitter";
          $result2 = $conn->query($sql2);
          
          if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
              echo "<div class=\"w3-third w3-container w3-margin-bottom style=\"background-color:#1DA1F2;\">
              <div class=\"w3-container w3-white\" style=\"text-align:center; border-radius:30px;\"> 
                <p><b>".$row["text"]."</b></p>
                <p style=\"font-size:12px\"><b>By:</b>".$row["user.screen_name"]."</p>
                <p style=\"font-size:12px\"><b>From:</b>".$row["source"]."</p>
                <p style=\"font-size:12px\"><b>Date:</b>".$row["created_at"]."</p>
                <p style=\"font-size:12px\"><b>ID:</b>".$row["id"]."
              </div>
            </div>";
            }
          } else {
            echo "0 results";
          } 
    ?>
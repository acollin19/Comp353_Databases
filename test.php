//to keep

<?php

    $sql = "SELECT * FROM User;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);

    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['userID'];
        }
    }

    $sql = "SELECT userID, firstname, username FROM User";
    $usr = "SELECT username FROM User";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "username is : " . $row["username"];
      }
    } else {
      echo "0 results";
    }
    $conn->close();
?>
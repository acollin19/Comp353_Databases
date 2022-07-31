<!DOCTYPE html>
<html>
<head>
    <TITLE> Different World Regions </TITLE>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>


<?php      
    include('dbh.inc.php');
    
    $sql = "SELECT regionID, name FROM Region";
    $result = $conn->query($sql);

    // echo "<tr><td>" ."<a href=Countries.php? id=$row[regionID]>".$row["regionID"]."</a>"."</td><td>" . $row["name"]. "</td></tr>";


    

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th></tr>";
        
        // output data of each row
        while ($row = $result->fetch_assoc()) {

          
            //echo "<tr><td>" ."<a href=Countries.php?id='.$row[regionID].'>".$row["regionID"]."</a>"."</td><td>" . $row["name"]. "</td></tr>";
            echo "<tr><td>" ."<a href=Countries.php?id=$row[regionID]>".$row["regionID"]."</a>"."</td><td>" . $row["name"]. "</td></tr>";


           // echo "<tr><td>" .$row["regionID"]."</td> <td>" ."<a href=Countries.php? id=$row[regionID]>". $row["name"]."</a>"."</td></tr>";
           
          

        }
        echo "</table>";
    } else {
        echo "0 results";
}
    
?>

<p>Click <a href="index.php">here</a> to return to the Home page.</p>

</body>
</html>



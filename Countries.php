<!DOCTYPE html>
<html>
<head>
    <TITLE> Countries by Region </TITLE>
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
    

    $regionId = $_GET['id'];
    $sql = "SELECT name FROM Country WHERE regionID=$regionId";

    $result = $conn -> query($sql) or die($conn->error);


    while($row = $result->fetch_assoc()){
        
        
        echo "</br> <tr> <td>" .$row['name']. "</td>  </tr></br>";
    }

    echo "</table>";


?>

<p>Click <a href="index.php">here</a> to return to the Home page.</p>

</body>

</html>

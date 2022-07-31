<?php  
// RESEARCHER PRIVILEGE PAGE
// ADD/EDIT/DELETE ALL ARTICLES
    include('dbh.inc.php');

    $articles = mysqli_query($conn,"SELECT * FROM Article"); // fetch data from database
    
    while($data = mysqli_fetch_array($articles))
    {
?>
        <tr>
        <td><?php echo $data['articleID']; ?></td>
        <td><?php echo $data['authorID']; ?></td>
        <td><?php echo $data['majorTopic']; ?></td>    
                
        <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td></br>
        </tr>	
<?php
        
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>

<p>Click <a href="index.php">here</a> to return to the Home page.</p>

</body>

</html>
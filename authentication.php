<?php      
    include('dbh.inc.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "SELECT User.username, User.password
                FROM User, Privilege
                WHERE User.privilegeID = Privilege.privilegeID and (Privilege.name = 'Administrator' or Privilege.name = 'Researcher' or Privilege.name = 'Organization Delegate') and username = '$username' and password = '$password'
                GROUP BY User.username";
        
        $admin = "SELECT Privilege.name FROM Privilege WHERE Privilege.name = 'Administrator'";
        $researcher = "SELECT Privilege.name FROM Privilege WHERE Privilege.name = 'Researcher'";
        $org = "SELECT Privilege.name FROM Privilege WHERE Privilege.name = 'Organization Delegate'";


        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

          
        if($count != 1){  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            

        } else{    

            echo "<h1><center> Login successful! </center></h1>";  

            // IF ADMIN
            if($admin){
                echo "<h3><li> Modify database as an <a href='admin.php'> Administrator. </a></li></h3>";
            } else {
                echo "You do no have permissions.";
            }

            // IF RESEARCHER
            if($researcher){
                echo "<h3><li> Modify database as a <a href='researcher.php'> Researcher. </a></li></h3>";
            } else {
                echo "You do no have permissions.";
            }

            // IF ORGANIZATION
            if($org){
                 echo "<h3><li> Modify database as an <a href='organization.php'> Organization. </a></li></h3>";
            } else {
                echo "You do no have permissions.";
            }

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




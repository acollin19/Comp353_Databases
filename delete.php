<?php 
//***************************
//NOT PROPERLY DELETING 
//***************************

    include('dbh.inc.php');

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"DELETE from Article WHERE articleID = '$id'"); // delete query

if($del) {
    echo "Article deleted"; 
    mysqli_close($db); // Close connection
    //header("location:all_records.php"); // redirects to all records page
    exit;	
} else {
    echo "Error deleting record"; // display error message if not delete
}
?>
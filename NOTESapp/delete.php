<?php
require_once('includes/db.php');

if(!isset($_GET['id'])){
     echo '<script>alert("sorry your note was not deleted.. please try again later")</script>';
    header("Location: index.php");
}
$id = $_GET['id'];
$sql = "DELETE FROM notes WHERE id = '".$id."' LIMIT 1";
if(mysqli_query($conn,$sql)){
    echo '<script>alert("your note is succesfully deleted")</script>';
    header("Location: index.php");
}

?>
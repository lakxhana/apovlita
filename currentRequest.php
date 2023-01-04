<?php
session_start();
include('database.php');
if($_SESSION["id"] == null & $_SESSION["name"] == null & $_SESSION["email"] == null & $_SESSION["id"] == null)
  {
    header("Location:signin.php");
  }

$query = "SELECT * FROM request where 'custId' = ".$_SESSION['id']."  ";

$result = mysqli_query($conn, $query);

?>


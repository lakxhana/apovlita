<?php

include("database.php");
extract ($_POST);
session_start();

if($conn===false)
{
	die("connection error");
}

if(isset($_POST['signin']))
{   

	$userEmail=$_POST["userEmail"];
	$userPassword=$_POST["userPassword"];

	$result=mysqli_query($conn,"SELECT * FROM `user` WHERE `email`='$email' AND `password`= '$password'");
	$row=mysqli_fetch_array($result);

    
	 if (is_array($row)){
     $_SESSION["id"] = $row ['userId'];
     $_SESSION["name"] = $row ['name'];
     $_SESSION["email"] = $row ['email'];
     $_SESSION["password"] = $row ['password'];
    
     header("Location:home.php?email=<?php echo $email?>");


    }else{
        echo '<script language="javascript">';
        echo 'alert("Invalid username or password!")';
        echo '</script>';
        echo "<script type='text/javascript'>window.location='signin.php";
        echo "'</script>";
    } 
}



?>
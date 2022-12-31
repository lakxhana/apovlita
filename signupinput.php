<?php

include("database.php");

extract ($_POST);

$query = "INSERT INTO `user` SET `name`='$name',`phoneNum`='$phoneNum',`email`='$email',`password`='$password'";

if (mysqli_query($conn, $query)){
    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='signin.php?";
	echo $name;
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>
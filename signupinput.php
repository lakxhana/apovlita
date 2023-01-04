<?php

include("database.php");

extract ($_POST);

$query = "INSERT INTO `user` SET `name`='$name',`phoneNum`='$phoneNum',`email`='$email',`password`='$password'";

if (mysqli_query($conn, $query)){

    //Create Customer

    $query2 = "SELECT * FROM `user` where `name` = '$name' AND `phoneNum` = '$phoneNum' AND `email` = '$email' AND `password` = '$password'";
    $result2 = mysqli_query($conn, $query2);

    if(mysqli_num_rows($result2) > 0)
    {
        while($row = mysqli_fetch_assoc($result2))
        {
            $query3 = "INSERT INTO customer (userId, c_address) VALUES (".$row['userId'].", 'null')";
            $result3 = mysqli_query($conn, $query3);
        }
    }

    echo '<script language="javascript">';
    echo 'alert("Success!")';
    echo '</script>';
	echo "<script type='text/javascript'>window.location='signin.php?";
	echo "'</script>";	

}else{
	echo"Error:" . $query . "<br>" . mysqli_error($conn);
}

?>
<?php
    //One Time Only
    include('../../database.php');

    for($i = 0; $i < 10; $i++)
    {
        $query = "INSERT INTO user (`name`, `phoneNum`, `email`, `password`) VALUES ('Test".(string)$i."', '013772763".(string)$i."', 'test".(string)$i."@gmail.com', 'test000".(string)$i."')";
        $result = mysqli_query($conn, $query);

        echo "passed1";
        var_dump($result);

        $query2 = "SELECT * FROM `user` where `name` = 'Test".(string)$i."' AND `phoneNum` = '013772763".(string)$i."' AND `email` = 'test".(string)$i."@gmail.com' AND `password` = 'test000".(string)$i."'";
        $result2 = mysqli_query($conn, $query2);

        echo "passed2";
        var_dump($result2);

        if(mysqli_num_rows($result2) > 0)
        {
            while($row = mysqli_fetch_assoc($result2))
            {
                if($i < 5)
                {
                    $query3 = "INSERT INTO collector (userId, co_noPlate) VALUES (".$row['userId'].", 'JKE".(string)$i."34".(string)$i."')";
                    $result3 = mysqli_query($conn, $query3);
                    echo "passed3";
                }
                else
                {
                    $query4 = "INSERT INTO recycler (r_companyName, r_companyNum, r_address, r_companyEmail, userId) VALUES ('company A".(string)$i."', '013772763".(string)$i."', 'JALAN ADILA ".(string)$i.", Taman Kulai ".(string)$i."', 'companyA".(string)$i."@gmail.com', ".$row['userId'].")";
                    $result4 = mysqli_query($conn, $query4);
                    echo "passed4";
                }
            }
        }
    }

    header("Location:..\..\home.php");


    // $query =  "INSERT INTO item ('p_type', 'p_model', 'p_brand', 'p_serialNum', 'p_unit') VALUES (".$type[$item].", ".$model[$item].", ".$brand[$item].", ".$serial[$item].", ".$unit[$item].")";
	// $result =  mysqli_query($conn, $query);
?>

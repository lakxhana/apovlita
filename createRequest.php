<?php
include("database.php");
extract ($_POST);
session_start();

if($conn===false)
{
	die("connection error");
}

if(isset($_POST['createRequest']))
{
	$type = $_POST['itemType'];
	$model = $_POST['itemModel'];
	$brand = $_POST['itemBrand'];
	$serial = $_POST['itemSerialNum'];
	$unit = $_POST['itemUnit'];

	// var_dump($type);
	foreach($serial as $item)
	{
		$search = "SELECT * FROM item WHERE 'p_serialNum' = ".$serial[$item]."";
		$sresult = mysqli_query($conn, $search);

		if(mysqli_num_rows($sresult) > 0)
		{
			
		}
		else
		{
			$query =  "INSERT INTO item ('p_type', 'p_model', 'p_brand', 'p_serialNum', 'p_unit') VALUES (".$type[$item].", ".$model[$item].", ".$brand[$item].", ".$serial[$item].", ".$unit[$item].")";
			$result =  mysqli_query($conn, $query);
		}
		// var_dump($item);
		// echo $item;
	}
	
}


?>
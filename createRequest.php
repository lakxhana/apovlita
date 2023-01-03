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

	var_dump($type);
	foreach($serial as $item)
	{
		// var_dump($serial);
		// echo $item;
	}

	$query =  "INSERT INTO item ('p_type', 'p_model', 'p_brand', 'p_serialNum', 'p_unit') VALUES ()";
}


?>
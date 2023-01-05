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
	$reqName = $_POST['requestName'];
	$reqDetails = $_POST['requestDetails'];



	$collector = "SELECT * FROM collector ORDER BY RAND() LIMIT 1 ";
	$resultC = mysqli_query($conn, $collector);
	// var_dump($resultC);
	$collector;
	$cust;

	while($row = mysqli_fetch_assoc($resultC))
	{
		$yaoyao = "SELECT * FROM customer WHERE userId = ".$_SESSION['id']."";
		$resyaoyao = mysqli_query($conn, $yaoyao);
		$rowyaoyao = mysqli_fetch_assoc($resyaoyao);

		$query2 = "INSERT INTO request (custId, collectorId, requestName, requestDetails, requestDate, status) VALUES ('".$rowyaoyao['custId']."', '".$row['collectorId']."', '$reqName', '$reqDetails', '".date("Y/M/D")."', 'requesting')";
		$result2 = mysqli_query($conn, $query2);
		// var_dump($query2);
		// echo $result2;
		$collector = $row['collectorId'];
		$cust = $rowyaoyao['custId'];
	}

	// var_dump($type);
	foreach($serial as $item => $key)
	{
		// var_dump($item);
		// echo $key;
		$search = "SELECT * FROM item WHERE 'p_serialNum' = ".$serial[$item]."";
		$sresult = mysqli_query($conn, $search);

		if(mysqli_num_rows($sresult) > 0)
		{
			
		}
		else
		{
			$query =  "INSERT INTO item (p_type, p_model, p_brand, p_serialNum, p_unit) VALUES ('".$type[$item]."', '".$model[$item]."', '".$brand[$item]."', '".$serial[$item]."', '".$unit[$item]."')";
			$result =  mysqli_query($conn, $query);
			var_dump($result);

			$nahida = "SELECT * FROM request WHERE custId = '$cust' AND collectorId = ".$collector."";
			$resnahida = mysqli_query($conn, $nahida);
			// var_dump($resnahida);
			$rownahida = mysqli_fetch_assoc($resnahida);

			$qiqi = "SELECT * FROM item WHERE p_type = '".$type[$item]."' AND p_model = '".$model[$item]."' AND p_brand = '".$brand[$item]."' AND p_serialNum = '".$serial[$item]."' AND p_unit = '".$unit[$item]."' ";
			$resqiqi = mysqli_query($conn, $qiqi);
			// var_dump($qiqi);
			$rowqiqi = mysqli_fetch_assoc($resqiqi);

			$klee = "INSERT INTO item_list (reqId, itemId) VALUES (".$rownahida['reqId'].", ".$rowqiqi['itemId'].")";
			$resklee = mysqli_query($conn, $klee);
			var_dump($klee);
		}
		// var_dump($item);
		// echo $item;
	}

	header("Location:currentRequest.php");
	
}


?>
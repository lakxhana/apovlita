<?php
session_start();
include('database.php');
if($_SESSION["id"] == null & $_SESSION["name"] == null & $_SESSION["email"] == null & $_SESSION["id"] == null)
  {
    header("Location:signin.php");
  }

$query2 = "SELECT * FROM customer where userid = ".$_SESSION['id']."";
$result2 = mysqli_query($conn, $query2);
$diona = mysqli_fetch_assoc($result2);

$query = "SELECT * FROM request where custId = ".$diona['custId']."";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
// var_dump($result);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/759821dfb2.js" crossorigin="anonymous"></script>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="home.php">Apovlita.</a>
      </div>
      <ul>
      <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="withdraw.php">Withdraw</a></li>
        <li class="nav-item"><a class="nav-link" href="helpcenter.php">Help Center</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </nav>
  <div class="background"></div>
  <div class="center">
  <div class="title">Current request</div>
  <div class="container rounded bg-white mt-4">
    <div class="row">
        <div class="col-md-15">
          <div class="p-3 py-5">
              <div class="d-flex">
              </div>
                <div class="row mt-3">
                  <div class="col-md-6">
                        Request Name:  &nbsp; <?php echo $row["requestName"]; ?> 
                  </div>
                  <div class="col-md-6">
                        Request Details:  &nbsp; <?php echo $row["requestDetails"]; ?> 
                  </div>
                  <div class="col-md-6">
                        Date:  &nbsp; <?php echo $row["requestDate"]; ?> 
                  </div>
                  <div class="col-md-6">
                        Status:  &nbsp; <?php echo $row["status"]; ?> 
                  </div>

                  </br>
                  <div class= "slider-btn">
                    <a class="btn btn-dark" href="navigate.php">
                      Approve Request
                    </a>
                  </div> 
                </div>
          </div>
        </div>
    </div>
  </div>
  </div>

</body>
</html>


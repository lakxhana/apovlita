<?php
  session_start();
  include('database.php');

  if($_SESSION["id"] == null & $_SESSION["name"] == null & $_SESSION["email"] == null & $_SESSION["id"] == null)
  {
    header("Location:signin.php");
  }

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
        <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Receipts</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Help Center</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
      </ul>
    </div>
  </nav>
  <div class="background"></div>
  <div class="center">
    <div class="title">Welcome back, <?php echo $_SESSION['name'] ?></div>
    <br>
    <br>
    <br>
    <div>
      <figure class="figure mx-5">
      <a href="request.php" style="text-decoration: none;">
        <i class="fa-solid fa-plus fa-2xl" style="color:white;"></i>
        <p class="text-light">
          Create Request
        </p>
      </a>
      </figure>
      <figure class="figure mx-5">
      <a href="currentRequest.php" style="text-decoration: none;">
      <i class="fas fa-chevron-circle-right fa-2xl" style="color:white;"></i>
        <p class="text-light">
          Current Request
        </p>
      </a>
      </figure>
      <figure class="figure mx-5">
      <a href="#" style="text-decoration: none;">
      <i class="fa-solid fa-receipt fa-2xl" style="color:white;"></i>
        <p class="text-light">
          Receipt
        </p>
      </a>
      </figure>
    </div>
  </div>

  <script>
    
  </script>
</body>
</html>
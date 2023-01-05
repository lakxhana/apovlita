<?php
  session_start();
  include('database.php');
  if($_SESSION["id"] == null & $_SESSION["name"] == null & $_SESSION["email"] == null & $_SESSION["id"] == null)
  {
    header("Location:signin.php");
  }
  $query = "SELECT * FROM (user 
              INNER JOIN customer on user.userId = customer.userId)
              inner join request on customer.custId = request.custId 
              ";
  $result = mysqli_query($conn, $query);
  // var_dump($result);

  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   </head>
<body>
  <script type="text/javascript">
      function addrows()
      {
        var table = document.getElementById('itemTable');
        var rowCount = table.rows.length;
        var cellCount = table.rows[0].cells.length; 
        var row = table.insertRow(rowCount);
        for(var i =0; i <= cellCount; i++){
          var cell = 'cell'+i;
          cell = row.insertCell(i);
          var copycel = document.getElementById('col'+i).innerHTML;
          cell.innerHTML=copycel;
        }
      }

      function deleterows()
      {
        var table = document.getElementById('itemTable');
        var rowCount = table.rows.length;
        if(rowCount > '2'){
          var row = table.deleteRow(rowCount-1);
          rowCount--;
        }
        else{
          alert('There should be atleast one row');
        }
      }
  </script>
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
    <div class="center bg-dark">
        <div class="d-flex justify-content-end">
            <button class="btn btn-success" onclick="addrows()">
              Add Items
            </button>
           <p>|</p>
            <button class="btn btn-danger" onclick="deleterows()">
              Remove Last Items
            </button>
        </div>
        <div>
        <form name="additem" method="POST" action="createRequest.php" onsubmit="">
            <label class="text-light">Request:</label>
            <input class="" type="text" name="requestName">
            <label class="text-light">Details:</label>  
            <input class="" type="text" name="requestDetails">
            
            <table class="table" id="itemTable">
              <tr class="text-light">
                <th>Type</th>
                <th>Model</th>
                <th>Brand</th>
                <th>Serial Number</th>
                <th>Unit</th>
              </tr>
              <tr>
                <td id="col0">
                  <select name="itemType[]">
                    <option>Laptop</option>
                    <option>Desktop</option>
                    <option>Monitor</option>
                    <option>Mouse</option>
                    <option>Keyboard</option>
                    <option>Speaker</option>
                    <option>UPS</option>
                    <option>Printer</option>
                    <option>Switch</option>
                    <option>Server</option>
                  </select>
                </td>
                <td id="col1">
                  <input type="text" name="itemModel[]">
                </td>
                <td id="col2">
                  <input type="text" name="itemBrand[]">
                </td>
                <td id="col3">
                  <input type="text" name="itemSerialNum[]">
                </td>
                <td id="col4">
                  <input type="number" name="itemUnit[]" min="1">
                </td>
              </tr>
            </table>
            <input class="btn btn-light" type="submit" value="Create Request" name="createRequest">
        </form>
        </div>
    </div>
    <br>
    <br>
    
  </div>
</body>
</html>
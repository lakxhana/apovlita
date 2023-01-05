<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <script type="text/javascript">
    function validateForm(){
      var x= document.forms["signinform"]["email"].value;
      var y= document.forms["signinform"]["password"].value;

      if(x== ""){
        alert("Please enter your user email address");
        return false;
      }

      if(y== ""){
        alert("Please enter your password");
        return false;
    }

  }

  </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">Apovlita.</a>
      </div>
      <ul>
        <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
      </ul>
    </div>
  </nav>
  <div class="background"></div>
  <div class="center">
  <form name="signinform" method="POST" action="signininput.php"  onSubmit = "return validateForm()">
<div class= "wallpaper"> 
<div class= "card">
       <input type="checkbox" id="chk" aria-hidden="true" name="">
       <div class="content">
           <div class="front">
               <div class="inner">
                   <h2>Sign In</h2>
                   <p></p>
                   <input type= "text" name="email" placeholder= "Email Address">
                   <input type= "password" name="password" placeholder= "Password">
                   <div class= "slider-btn">
                <a href=""> <button class= "btn btn" type= "submit" name="signin" >Sign In </button> </a>
                    </div> 
</br>
<div class= "label">
                    <label for= "chk" aria-hidden="true">Forgot Password?</label>
</br>
                    <label>Don't have an account?<a href="signup.php">Sign Up Now</a></label>      
</div>
                </div>   
            </div>
            </form>
            <div class="back">
               <div class="inner">
                   <h2>Forgot Password?</h2>
                   <p></p>
                   <input type= "text" name="adminEmail" placeholder= "Email Address">
                   <div class= "label"><label for= "chk" aria-hidden="true">Back</label></div>
                </div>
            </div>


        </div>
    </div>
</div>
    </div>
  </div>
</body>
</html>
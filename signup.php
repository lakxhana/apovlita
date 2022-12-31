<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <script type="text/javascript">
    function validateForm(){
      var a= document.forms["signupform"]["name"].value;
      var b= document.forms["signupform"]["phoneNum"].value;
      var c= document.forms["signupform"]["email"].value;
      var d= document.forms["signupform"]["password"].value;

      if(a== ""){
        alert("Please enter your name");
        return false;
      }

      if(b== ""){
        alert("Please enter your phone number");
        return false;
      }
      if(!/^[0-9]+$/.test(b)){
    alert("Please only enter numeric characters only for your Phone Number Number! (Allowed input:0-9)")
      }

      if(c== ""){
        alert("Please enter your email address");
        return false;
      }
   

      if(d== ""){
        alert("Please enter your password");
        return false;
      }

      if(d.length <= 6){
        alert("Password must be longer than 6 characters");
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
        <li class="nav-item"><a class="nav-link active" href="homepage.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="signin.php">Sign In</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Feedback</a></li>
      </ul>
    </div>
  </nav>
  <div class="background"></div>
  <div class="center">
  <form name="signupform" method="POST" action="signupinput.php"  onSubmit = "return validateForm()">
<div class= "wallpaper"> 
<div class= "card2">
       <input type="checkbox" id="chk" aria-hidden="true" name="">
       <div class="content">
           <div class="front">
               <div class="inner">
                   <h2>Sign Up</h2>
                   <p></p>
                   <input type= "text" name="name" placeholder= "Name">
                   <input type= "text" name="phoneNum" placeholder= "Phone Number">
                   <input type= "text" name="email" placeholder= "Email Address">
                   <input type= "password" name="password" placeholder= "Password">
                   <div class= "slider-btn">
                <a href=""> <button class= "btn btn" type= "submit">Sign Up </button> </a>
                    </div> 
</br>
<div class= "label">
                    <label>Already have an account?<a href="signin.php">Sign In Now</a></label>      
</div>
                </div>   
            </div>
            </form>
        </div>
    </div>
</div>
    </div>
  </div>
</body>
</html>
  
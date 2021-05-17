<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>

* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;
  margin-left: 80px;
  margin-right: 80px;
  background-color:#53900F;

}
.phone{
  float:right;
  font-size: 15px;
  background-color: #53900F;
  color:white;
  padding:5px;
  border-right: 3px solid white;
  border-radius: 3px;


}
.email{
  float:right;
  font-size: 15px;
  background-color:  #53900F;
  color:white;
  padding:5px;
  border-right: 3px solid white;
  border-radius: 3px;
}

.navbar {
  width: 100%;
  background-color:  #579B27;
  overflow: auto;
  cursor: pointer;
  position: relative;
  margin-bottom: 0px;
  border: 1px solid transparent;
}

.navbar a {
  float: left;
  padding: 12px;
  color:white;
  font-size: 22px;
  width: 20%; /* Four links of equal widths */
  text-align: center;
  font-family: serif;
  font-weight: bolder;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #9DBE26;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
    border: 2px solid white;

  }
}
.heading{
  color:/*#579B27*/ #190061;
  font-size:40px;
  background-color: white;
    font-family: Georgia, serif;
    text-shadow:5px 5px 10px darkgray;
/*  font-family: "Audiowide",sans-serif;*/

/*  font-style: oblique;*/
  f
  /*text-shadow: 2px 4px solid #AFD375;*/
  text-transform: uppercase;
  font-weight:bolder;
}

.logo{
  width:230px;
  height:170px;
  float: left;
  padding-top: 10px;

  padding-left: 35px;
}

input[type=submit] {
  width: 30%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;

    }
    input[type=text], select {
        width: 90%;
        padding: 12px 20px;
        margin: 2px 0;
        display: inline-block;
        border: 1px solid #53900F;
        border-radius: 6px;
        box-sizing: border-box;

    }
    .row:after {
   content: "";
     display: table;
     clear: both;
    }
    .col-25 {
    float: left;
    width: 25%;
  margin-top: 6px;
  font-size:20px;
  font-variant: small-caps;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    .submit{
      float: right;
      width: 75%;
      margin-top: 6px;
      font-size: 18px;
      font-variant: small-caps;
      font-weight: bold;
    }
    input[type=date], select {
        width: 80%;
        padding: 12px 20px;
        margin: 2px 0;
        display: inline-block;
        border: 1px solid #53900F;
        border-radius: 4px;
        box-sizing: border-box;

    }
    input[type=password], select {
        width: 70%;
        padding: 12px 20px;
        margin: 2px 0;
        display: inline-block;
        border: 1px solid  #53900F;
        border-radius: 4px;
        box-sizing: border-box;



    }
    .Entries{
      background-color: white;
      padding:60px;
      width:50%;
      border-radius: 15px;
      float: left;



    }
    .title{
      background-color: white;
      padding-left:  60px;
      padding-top: 20px;
      font-size: 38px;
      font-family: Oxygen;
      font-weight:normal;
      color: #190061;
      margin-bottom: 9px;
      border-radius: 5px;

    }

</style>
<body>
  <div class="heading">

    <span class="email">&nbspEmail id: ashwinisamak93@gmail.com &nbsp</span>
    <span class="phone">Phone no.:&nbsp 9876543210 &nbsp  </span>
    <img class="logo"src="images\logo5.jpg" alt="logo" >
  <br>&nbsp &nbsp &nbspBUS TICKET RESERVATION PORTAL<br><br>
    </div>
    <div class="navbar">
        <a href="index.php"><span class="glyphicon glyphicon-home"> Home</a>

      <!-- <a href="D:\DBMS MINI PROJECT\cancellation"><span class="glyphicon glyphicon-remove"></span> Cancellation</a>-->

         <a class="active" href="register.php"><span class="glyphicon glyphicon-search"></span>  Register</a>
         <a href="login.php"><span class="glyphicon glyphicon-user"></span>  Login</a>
        <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
        <a href="feedback.php"><span class="glyphicon glyphicon-envelope"></span>Feedback</a>


      </div>



    <div class="title">
      Enter your details:
    </div>
    <div class="Entries">
      <form class="contact" action="" method="POST" autocomplete="off">
        <div class="row">
          <div class="col-25">
            <label for="Name">Name:</label><br>
          </div>
          <div class="col-75">
            <input type="text" id="Name" name="Name" required><br>
          </div>
        </div>

        <div class="row">
         <div class="col-25">
             <label for="Email">Email:</label><br>
           </div>
         <div class="col-75">
             <input type="text" id="Email" name="Email" required><br>
           </div>
       </div>
       <div class="row">
       <div class="col-25">
             <label for="Password">Password:</label><br>
         </div>
       <div class="col-75">
           <input type="password" id="Password" name="Password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required><br>
           <input type="checkbox" onclick="myFunction()">  Show Password<br>
         </div>
     </div>




    <!--<div class="row">
    <div class="col-25">
          <label for="conPassword">Confirm Password:</label><br>
      </div>
    <div class="col-75">
        <input type="password" id="conPassword" name="conPassword"><br>
      </div>
  </div>-->

          <div class="row">
          <div class="col-25">
                <label for="phno">Phone no.:</label><br>
            </div>
          <div class="col-75">
              <input type="text" id="phno" name="phno" ><br>
            </div>
        </div>

        <div class="row">
         <div class="col-25">
             <label for="date">Date of birth:</label><br>
           </div>
         <div class="col-75">
             <input type="date" id="date" name="date"><br>
           </div>
       </div>

       <div class="row">
       <div class="col-25">
           <label for="gender">Gender:</label><br>
         </div>
       <div class="col-75">
           <input type="text" id="gender" name="gender" required><br>
         </div>
     </div>
     <div class="row">
     <div class="col-25">
         <label for="city">City:</label><br>
       </div>
     <div class="col-75">
         <input type="text" id="city" name="city" required><br>
       </div>
   </div>




           <input type="submit" value="Submit" name="submitpost" onclick="login.php"><br>
         </div>
      </form>
      </div>



      <script>

      function myFunction() {
  var x = document.getElementById("Password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
      var myInput = document.getElementById("psw");
      var letter = document.getElementById("letter");
      var capital = document.getElementById("capital");
      var number = document.getElementById("number");
      var length = document.getElementById("length");

      // When the user starts to type something inside the password field
      myInput.onkeyup = function() {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if(myInput.value.match(lowerCaseLetters)) {
          letter.classList.remove("invalid");
          letter.classList.add("valid");
        } else {
          letter.classList.remove("valid");
          letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if(myInput.value.match(upperCaseLetters)) {
          capital.classList.remove("invalid");
          capital.classList.add("valid");
        } else {
          capital.classList.remove("valid");
          capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if(myInput.value.match(numbers)) {
          number.classList.remove("invalid");
          number.classList.add("valid");
        } else {
          number.classList.remove("valid");
          number.classList.add("invalid");
        }

        // Validate length
        if(myInput.value.length >= 8) {
          length.classList.remove("invalid");
          length.classList.add("valid");
        } else {
          length.classList.remove("valid");
          length.classList.add("invalid");
        }
      }



      </script>

      <?php
      $validate=true;
      $error = "";
      $email = "";
      $date = "mm/dd/yyyy";

      if($_SERVER['REQUEST_METHOD'] === 'POST'){

     if(isset($_POST['submitpost'])){
      $con = mysqli_connect("localhost","root","");
      if(!$con)
          {
      die('Could not connect: ' . mysqli_error());
      }

      mysqli_select_db($con,'mini_project');
      $email = trim($_POST["Email"]);
      $date = trim($_POST["date"]);
      $q1 = "SELECT * FROM users WHERE EMAIL = '$email'";
      $r1 = $con->query($q1);

      // if the email address is already taken.
      if($r1->num_rows > 0)
      {
        $validate = false;
      }
      if($validate == true)
    {
        $dateFormat = date("Y-m-d", strtotime($date));
       $query = "INSERT INTO users(PASSWD,NAME,PHNO,GENDER,EMAIL,DOB,CITY) VALUES ('$_POST[Password]','$_POST[Name]','$_POST[phno]','$_POST[gender]','$_POST[Email]','$_POST[date]','$_POST[city]')";
       $r2 = mysqli_query($con,$query);

         if ($r2 === true)
         {
            // header("Location: Login.php");
            echo "<script>alert('Thank you for Submitting the details. Click OK to Continue');</script>";
               mysqli_close($con);
             exit();
         }
     }
     else
     {
         $error = "email address is not available. Signup failed.";
          echo "<script>alert('An account already exists for the given email id.Signup failed.');</script>";
         mysqli_close($con);
     }


      //header('Location:login.php');
    }
       }



       ?>
  </body>
  </html>

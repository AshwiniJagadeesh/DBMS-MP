


<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

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
		.Submit{
      float: right;
      width: 75%;
      margin-top: 6px;
      font-size: 18px;
      font-variant: small-caps;
      font-weight: bold;
		}
    .login-info{
      background-color: white;
      padding-left:60px;
      padding-top:60px;
      padding-right:60px;
      padding-bottom: 30px;
      width:50%;
      border:20px solid #53900F;
      margin-left: 40px;
      margin-top: 30px solid white;




    }
    .admin-login-info{
      background-color: white;
      padding-left:60px;
      padding-top:60px;
      padding-right:60px;
      padding-bottom: 30px;
      width:0%;
      border-radius: 15px;


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
            width: 70%;
            padding: 12px 20px;
            margin: 2px 0;
            display: inline-block;
            border: 1px solid  #53900F;
            border-radius: 4px;
            box-sizing: border-box;



        }
        input[type=password], select {
            width: 70%;
            padding: 12px 20px;
            margin: 2px 0;
            display: inline-block;
            border: 1px solid  #53900F ;
            border-radius: 4px;
            box-sizing: border-box;



        }
        th.login-title{
          background-color: white;
          padding-left:  60px;
          padding-top: 20px;
          font-size: 38px;
          font-family: Oxygen;
          font-weight:normal;
          color: #190061;
          margin-bottom: 9px;
          border:20px solid #53900F;
          width:50%;
          margin-left: 30px;

        }

        .admin-login-title{
          background-color: white;
          padding-left:  60px;
          padding-top: 20px;
          font-size: 38px;
          font-family: Oxygen;
          font-weight:normal;
          color: #190061;
          margin-bottom: 9px;
          border-radius: 5px;
          width:40%;
        }
        .register-link{
          font-size: 20px;
          text-underline-position: auto;


        }
        .register-link{
          padding-left: 120px;
          margin-top: 40px;
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

      <!-- <a href="D:\DBMS MINI PROJECT\cancellation.php"><span class="glyphicon glyphicon-remove"></span> Cancellation</a>-->

         <a href="register.php"><span class="glyphicon glyphicon-search"></span>  Register</a>
         <a class="active" href="login.php"><span class="glyphicon glyphicon-user"></span>  Login</a>
        <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
        <a href="feedback.php"><span class="glyphicon glyphicon-envelope"></span>Feedback</a>

      </div>


      <table style="width:60%;">
        <tr >
           <th class="login-title">User Login</th>

        </tr>
        <tr>
          <td class="login-info"><form action="validate.php" method="POST" >
            <div class="row">
              <div class="col-25">
                <label for="Emailid">Email id:</label><br>
              </div>
              <div class="col-75">
                <input type="text" id="Emailid" name="Emailid"><br>
              </div>
            </div>

              <div class="row">
              <div class="col-25">
                    <label for="Password">Password:</label><br>
                </div>
              <div class="col-75">
                  <input type="password" id="Password" name="Password"><br>
                </div>
            </div>

            <div class="Submit">

                <input type="submit"  name="submit" value="submit"> <br>
            </div>
           <br><br>

            <p class="register-link">  <a href="register.php">Click here to register</a></p>
          </form></td>

      <!--<td class="login-info"><form action="admin.php">
            <div class="row">
              <div class="col-25">
                <label for="Username">Username:</label><br>
              </div>
              <div class="col-75">
                <input type="text" id="Username" name="Username"><br>
              </div>
            </div>

              <div class="row">
              <div class="col-25">
                    <label for="Password">Password:</label><br>
                </div>
              <div class="col-75">
                  <input type="password" id="Password" name="Password"><br>
                </div>
            </div>

            <div class="Submit">
              <a href="#"></a>
                <input type="submit" value="Submit"><br>
            </div>

          </form></td>-->

        </tr>
      </table>


</body>
</html>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    .message{width: 90%;
    padding: 12px 20px;
    margin: 2px 0;
    display: inline-block;
    border: 1px solid #53900F;
    border-radius: 6px;
    box-sizing: border-box;
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
         <a href="login.php"><span class="glyphicon glyphicon-user"></span>  Login</a>
        <a  href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
          <a class="active" href="feedback.php"><span class="glyphicon glyphicon-envelope"></span>Feedback</a>

      </div>


      <div class="title">
      Feedback
      </div>
      <div class="Entries">
        <form action="" method="POST">
          <div class="row">
    				<div class="col-25">
    					<label for="Name">Name:</label><br>
    				</div>
    				<div class="col-75">
    					<input type="text" id="Name" name="Name"><br>
    				</div>
    			</div>

    				<div class="row">
    				<div class="col-25">
    							<label for="phno">Phone no.:</label><br>
    					</div>
    				<div class="col-75">
    						<input type="text" id="phno" name="phno"><br>
    					</div>
    			</div>

    			 <div class="row">
    				<div class="col-25">
    						<label for="Email">Email:</label><br>
    					</div>
    				<div class="col-75">
    						<input type="text" id="Email" name="Email"><br>
    					</div>
    			</div>

          <div class="row">
           <div class="col-25">
               <label for="Message">Message:</label><br>
             </div>
           <div class="col-75">
          <input type="text" id="message" name="message"><br>
             </div>
         </div>


           <div class="submit">
             <input type="submit" name="Submit" value="Submit"><br>
           </div>

        </form>
        </div>
        <?php
            //  $date = "mm/dd/yyyy";
              $con = mysqli_connect("localhost","root","");

              if(!$con)
                  {
              die('Could not connect: ' . mysqli_error());
              }

              mysqli_select_db($con,'mini_project');
              if($_SERVER['REQUEST_METHOD'] === 'POST'){
          //echo "Inserted";
            if(isset($_POST['Submit'])){
              $name=$_POST['Name'];
              $email=$_POST['Email'];
              $phone=$_POST['phno'];
              $message=$_POST['message'];

                  $query1 ="INSERT INTO feedback (NAME,EMAIL,PHNO,MESSAGE) VALUES ('$name','$email','$phone','$message')";
                  //$r2 =;


                if(mysqli_query($con,$query1))
                      {
                        echo "<script>alert('Thank you for Submitting the details. Click OK to Continue');</script>";
                        mysqli_close($con);
                         //exit();
                      }
                        echo "Inserted";
                }
              }

         ?>




  </body>
  </html>

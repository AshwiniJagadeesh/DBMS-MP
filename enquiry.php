<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

<style>
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
.user{
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
  width: 16.66%; /* Four links of equal widths */
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
.Entries{
  background-color: white;
  padding:60px;
  width:50%;
  border-radius: 15px;
  float: left;
}
.cancel{
  ba
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


    .bookings{
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

		.inputs{
			background-color: white;
		  padding:60px;
		  width:50%;
		  border-radius: 15px;
		  float: left;
		}
		.submit{
		float: right;
		width: 75%;
		margin-top: 6px;
		font-size: 18px;
		font-variant: small-caps;
		font-weight: bold;
	}
.display{
  background-color: white;
  padding:60px;
  width:50%;
  border-radius: 15px;
  float: left;
}
.user{
  float:right;
  font-size: 15px;
  background-color: #53900F;
  color:white;
  padding:5px;
  border-right: 3px solid white;
  border-radius: 3px;
}

</style>
<body>
  <div class="heading">
    <?php
    $con = mysqli_connect("localhost","root","");
    if(!$con)
        {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db($con,'mini_project');
    $uid=$_SESSION['userid'];
    $query="SELECT NAME FROM users WHERE ID='$uid'";
    $res=mysqli_query($con,$query);
    $row=mysqli_fetch_assoc($res);

    ?>

    <span class="email">&nbspEmail id: ashwinisamak93@gmail.com &nbsp</span>
    <span class="phone">Phone no.:&nbsp 9876543210 &nbsp  </span>
    <br>
    <?php   echo "<span class='user'>".$row['NAME'];
     echo "</span>";
 ?>
  <img class="logo"src="images\logo5.jpg" alt="logo" >  <br>&nbsp &nbsp &nbspBUS TICKET RESERVATION PORTAL<br><br>
    </div>
  <div class="navbar">
      <a href="dashboard.php"><span class="glyphicon glyphicon-home"> Home</a>
      <a class="active" href="enquiry.php"><span class="glyphicon glyphicon-search"></span>  Enquiry</a>
      <a href="bookinguser.php"><span class="glyphicon glyphicon-calendar"></span>  Book tickets</a>
      <a href="cancellation.php"><span class="glyphicon glyphicon-remove"></span> Cancellation</a>
      <a href="dshbrd.php"><span class="glyphicon glyphicon-calendar"></span>  Dashboard</a>
     <a href="index.php"><span class="glyphicon glyphicon-user"></span>  Logout</a>
    </div>

    <div class="bookings">Enquire:</div>
    		<div class="inputs">

    		<form action="enquireDisplay.php" method="POST">
        			<div class="row">
    				<div class="col-25">
    						<label for="Source">Starting point:</label><br>
    					</div>
    				<div class="col-75">
    						<input type="text" id="Source" name="Source"><br>
    					</div>
    			</div>

    			 <div class="row">
    				<div class="col-25">
    						<label for="Destination">Destination:</label><br>
    					</div>
    				<div class="col-75">
    						<input type="text" id="Destination" name="Destination"><br>
    					</div>
    			</div>

    			<div class="row">
    			<div class="col-25">
    					<label for="date">Date of departure:</label><br>
    				</div>
    			<div class="col-75">
    					<input type="date" id="date" name="date"><br>
    				</div>
    		</div>

        <div class="submit">
             <input type="submit" name='Submit'value="Submit"><br>
           </div>
</div>



  </body>
  </html>

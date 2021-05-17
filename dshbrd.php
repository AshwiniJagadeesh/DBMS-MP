<?php session_start(); ?>
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
  width: 16.6%; /* Four links of equal widths */
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

.bus-images{
  width: 100%;
  height: 600px;
  padding-top: 0px;
}
.logo{
  width:230px;
  height:170px;
  float: left;
  padding-top: 10px;

  padding-left: 35px;
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


.Routes{
 font-family: sans-serif ;
 font-size: 18px;
 color: darkgrey;
 margin:20px;
 border:3px solid darkgray;
 padding:10px;
 width:100%;
}
ul{
  list-style: none;
}


ul.1st_clm {
float: left;
width: 50%;
margin-top: 6px;
}

ul.2nd_clm {
    float: right;
    width: 50%;
    margin-top: 6px;
}

.Contents{
  background-color: white;
  padding-left: 60px;
  padding-top: 30px;
  padding-bottom: 30px;
  width:70%;
  border-radius: 5px;
  margin-bottom: 40px;




}
button{
  padding: 10px;
  margin:10px;
  background-color: #53900F;
  color: white;
  font-size: 20px;
  text-align: left;
  padding-left: 30px;
  border-radius: 5px;
  width: 90%;


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
.btn_style{
   text-decoration: white;
   color: white;
}




</style>
<body>
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
  <div class="heading">

    <span class="email">&nbspEmail id: ashwinisamak93@gmail.com &nbsp</span>
    <span class="phone">Phone no.:&nbsp 9876543210 &nbsp  </span><br>
    <?php   echo "<span class='user'>".$row['NAME'];
     echo "</span>";
 ?>

    <img class="logo"src="images\logo5.jpg" alt="logo" >
  <br>&nbsp &nbsp &nbspBUS TICKET RESERVATION PORTAL<br><br>
    </div>
  <div class="navbar">
      <a href="dashboard.php"><span class="glyphicon glyphicon-home"> Home</a>
        <a href="enquiry.php"><span class="glyphicon glyphicon-search"></span>  Enquiry</a>

      <a href="bookinguser.php"><span class="glyphicon glyphicon-calendar"></span>  Book tickets</a>
      <a href="cancellation.php"><span class="glyphicon glyphicon-remove"></span> Cancellation</a>

      <a   class="active" href="dshbrd.php"><span class="glyphicon glyphicon-calendar"></span>  Dashboard</a>
        <a href="index.php"><span class="glyphicon glyphicon-user"></span>  Logout</a>
    </div>
<div class="title">
WELCOME TO BUS TICKET BOOKING PORTAL
</div>
    <div class="Contents">
      <button type="button" name="home" ><a href="dashboard.php" class="btn_style">Home</a></button><br>
      <button type="button" name="home"><a href="bookinguser.php" class="btn_style">Book Tickets</a></button><br>
      <button type="button" name="home"><a href="cancellation.php" class="btn_style">Cancel ticket</a></button><br>
      <button type="button" name="home" ><a href="dshbrd.php" class="btn_style">Dashboard</a></button><br>
      <button type="button" name="home"><a href="account.php" class="btn_style">My Account</a></button><br>
      <button type="button" name="home"><a href="index.php" class="btn_style">Logout</a></button><br>

    </div>


</body>
</html>

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
  height: 450px;
  padding-top: 0px;
}
.logo{
  width:230px;
  height:170px;
  float: left;
  padding-top: 10px;

  padding-left: 35px;
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
.row tr{
 font-family: sans-serif ;
 font-size: 12px;
 color: black;
 margin:20px;


 width:40%;
}
.row {
  background-color: white;
  border-radius: 5px;
  width: 80%;
  padding-left: :100px;
  margin-bottom: 30px;

}
li{
  list-style: none;
  padding-left: 40px;
  padding-top: 20px;
  font-size: 19px;
}
.Content{
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
        <a   class="active" href="dashboard.php"><span class="glyphicon glyphicon-home"> Home</a>
          <a href="enquiry.php"><span class="glyphicon glyphicon-search"></span>  Enquiry</a>

        <a href="bookinguser.php"><span class="glyphicon glyphicon-calendar"></span>  Book tickets</a>
        <a href="cancellation.php"><span class="glyphicon glyphicon-remove"></span> Cancellation</a>
          <a href="dshbrd.php"><span class="glyphicon glyphicon-calendar"></span>  Dashboard</a>

         <a href="index.php"><span class="glyphicon glyphicon-user"></span>  Logout</a>


      </div>

    <img class="bus-images" src="images\bus-img5.jpg" alt="Bus">

    <div class="Content">
    List of available services across Karnataka:<br>
        <table class="row">

          <tr>
            <td>
              <li> &#128652;  Bengaluru - Mysore</li>
              <li> &#128652;  Bengaluru - Tumkur</li>
              <li> &#128652;  Bengaluru - Udupi</li>
              <li> &#128652;  Udupi - Bengaluru </li>
              <li> &#128652;  Udupi - Tumkur</li>
              <li> &#128652;  Udupi - Mysore</li>

            </td>


            <td>
              <li> &#128652;  Mysore - Bengaluru</li>
              <li> &#128652;  Mysore - Udupi</li>
              <li> &#128652;  Mysore - Tumkur</li>
              <li> &#128652;  Tumkur - Bengaluru</li>
              <li> &#128652;  Tumkur - Udupi</li>
              <li> &#128652;  Tumkur - Mysore</li>
            </td>
          </tr>

        </table>
    </div>

    <?php
  /*  echo "<div class='Content'>";
    echo "Customer reviews:";
    echo "<p style='font-size:22px; color:black;margin-bottom:100px;'>";
    while($data=mysqli_fetch_assoc($res)){
    //for($i=0;$i<;$i++){
    //$data=mysqli_fetch_assoc($res);
    echo "<br>";
    echo "" . $data['MESSAGE'];
    echo "<br>";
    echo "~" . $data['NAME'];

    echo "<br>";
    echo "<br>";}
    echo "</p>";
    echo "</div>";*/
     ?>





</body>
</html>

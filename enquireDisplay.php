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
.heading{
  color:/*#579B27*/ #190061;
  font-size:50px;
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
  width:260px;
  height:190px;
  float: left;
  padding-top: 10px;

  padding-left: 35px;
}
.display{
  background-color: white;
  padding:60px;
  width:80%;
  border-radius: 15px;
  float: left;
}
.available{
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
a{
  color: darkblue;
  font-size: 22px;
  padding-top: 10px;
}

th{
  color: black;
  font-size: 19px;
  border-right: 2px solid black;
  text-align: center;
  background-color: white;
  border-bottom: 2px solid black;
  padding: 10px;
  }
  td{
    color: blue;
    font-size: 19px;
    border-right: 2px solid black;
    text-align: center;
    background-color: white;
    border-bottom: 2px solid black;
    padding: 7px;
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
    <br>

    <div class="display">
      <?php

      $con = mysqli_connect("localhost","root","","mini_project");

        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['Submit'])){
          $result=mysqli_query($con, "SELECT * FROM route WHERE origin='$_POST[Source]' and destination='$_POST[Destination]'");
          //echo "Affected rows: " . mysqli_affected_rows($con);
          $row=mysqli_fetch_assoc($result);
          $route_id=$row['RID'];


          $result6=mysqli_query($con,"SELECT b.BID,rt.ORIGIN,rt.DESTINATION,b.DEPART_DATE,b.DEPART_TIME,b.CLASS FROM bus b,route rt WHERE rt.RID=b.RID AND rt.RID='$route_id' AND b.DEPART_DATE='$_POST[date]'");
          $num_rows = mysqli_num_rows($result6);

            if($num_rows==0){
               echo "<span style='font-size:22px;color:black;background-color:white;padding:5px;margin-top:20px;border-radius:5px;width:75%'>
                      No buses found for the given details.
                    </span>";
                      echo "<p class='goback'><a href='enquiry.php'>Go Back</a></p>";
            }

else{
echo "  <div class='available'>Available Buses are:</div>";


          echo "<table style='width:90%';>";
          echo "<tr style='border:3px solid black'>
          <th>Bus Id</th>
          <th>Origin</th>
          <th>Destination</th>
          <th>Date of Departure</th>
          <th>Departure Time</th>
          <th>Class</th>

              </tr>";
          //for($i=$num_rows;$i>0;$i--)
          while(  $row6=mysqli_fetch_assoc($result6)){
          echo "<tr><td style='border-left:2px solid black'>";
            echo $row6['BID'];
            echo "</td><td>";
            echo $row6['ORIGIN'];
            echo "</td><td>";
            echo $row6['DESTINATION'];
            echo "</td><td>";
            echo $row6['DEPART_DATE'];
            echo "</td><td>";
           echo $row6['DEPART_TIME'];
            echo "</td><td>";
            echo $row6['CLASS'];
            echo "</td></tr>";

          }
          echo "</table>";
            echo "<p class='goback'><a href='enquiry.php'>Go Back</a></p>";
          }
        }
      }?>
    </div>

      </body>
      </html>

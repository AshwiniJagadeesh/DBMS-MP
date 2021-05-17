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
  font-size:40px;
  background-color: white;
    font-family: Georgia, serif;
    text-shadow:5px 5px 10px darkgray;
/*  font-family: "Audiowide",sans-serif;*/

/*  font-style: oblique;*/

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
table{
  width:90%;
}
th{
  color: black;
  font-size: 19px;
  border-right: 2px solid black;
  text-align: center;
  background-color: white;
  }
  td{
    color: blue;
    font-size: 19px;
    border-right: 2px solid black;
    text-align: center;
    background-color: white;
    }
    a{
      color: white;
      font-size: 22px;
      padding-top: 10px;
    }
    .goback{
      padding-left:5px;
      padding-top: 10px;
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
    <?php
    $con = mysqli_connect("localhost","root","","mini_project");

    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
    }
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['Submit'])){
        //$date=$_POST['date'];
        //$newDate=date_format($date,"Y/m/d");
        // $newDate = date("Y-m-d", strtotime($date));
        // Perform queries and print out affected rows
        $result=mysqli_query($con, "SELECT * FROM route WHERE origin='$_POST[Source]' and destination='$_POST[Destination]'");
        //echo "Affected rows: " . mysqli_affected_rows($con);
        $row=mysqli_fetch_assoc($result);
        $route_id=$row['RID'];
        //echo "Route id: ".$row['RID'];
        //echo "Route id: ".$route_id;
        $result1=mysqli_query($con,"SELECT  * FROM bus WHERE RID=$route_id and (TOTAL_SEATS-RESERVED_SEATS)>='1' AND DEPART_DATE='$_POST[date]' AND CLASS='$_POST[Class]'");
        $row1=mysqli_fetch_assoc($result1);

        //echo "Bus details" . $row1['BID'];
    if(!$row1){
       echo "<p style='font-size:19px;color:black;background-color:white;padding:10px;margin-top:20px;border-radius:5px;width:75%'>
              No buses found for the given details.
            </p>";
    }

    else{
      $bus_id=$row1['BID'];
      $reserved=$row1['RESERVED_SEATS'];
       $result3=mysqli_query($con,"UPDATE bus SET RESERVED_SEATS=RESERVED_SEATS+1  WHERE BID=$bus_id");
       $uid=$_SESSION['userid'];

       $result4=mysqli_query($con,"INSERT INTO reservation(UID,BID,SEAT_NO) VALUES ('$uid','$bus_id','$reserved'+1)");
       $result5=mysqli_query($con,"SELECT * FROM reservation where TICKETNO=(SELECT LAST_INSERT_ID())");
       $row5=mysqli_fetch_assoc($result5);
       //echo "Ticket number:" . $row2['TICKETNO'];
       $ticketnumber=$row5['TICKETNO'];
       echo "<p style='background-color:white;font-size:19px;padding-left:15px;padding-top:20px;width:70%;margin-top:30px;border-radius:5px;padding-bottom:20px;'>Your booking is successfull!!";
       echo "</p> ";

       echo "</p>";
       $result6=mysqli_query($con,"SELECT r.TICKETNO,r.SEAT_NO,b.BID,rt.ORIGIN,rt.DESTINATION,b.DEPART_DATE,b.DEPART_TIME,b.CLASS,b.FARE FROM bus b, reservation r,route rt WHERE rt.RID=b.RID AND r.BID=b.BID AND r.TICKETNO='$ticketnumber'");
       $row6=mysqli_fetch_assoc($result6);
       echo "<table style='width:90%';>";
       echo "<tr style='border:3px solid black'>
       <th>Ticket number</th>
       <th>Seat Number</th>
       <th>Bus Id</th>
       <th>Origin</th>
       <th>Destination</th>
       <th>Date of Departure</th>
       <th>Departure Time</th>
       <th>Class</th>
       <th>Fare</th>
           </tr>";

       echo "<tr><td>";
       echo $row6['TICKETNO'];
       echo "</td><td>";
       echo $row6['SEAT_NO'];
       echo "</td><td>";
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
        echo "</td><td>";
        echo $row6['FARE'];
       echo "</td></tr></table>";
      //echo "</div>";
      echo "<p class='goback'><a href='bookinguser.php'>Go Back</a></p>";


    }
    //header('Location:dashboard.php');
    }
    }
    /*mysqli_query($con, "DELETE FROM users WHERE gender='female'");
    echo "Affected rows: " . mysqli_affected_rows($con);*/
    mysqli_close($con);
    ?>
</body>
</html>

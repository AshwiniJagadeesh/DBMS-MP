<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">

<body>
  <?php
  $con = mysqli_connect("localhost","root","");
  if(!$con)
      {
  die('Could not connect: ' . mysqli_error());
  }
  mysqli_select_db($con,'mini_project');
  $query="SELECT * FROM feedback";
  $res=mysqli_query($con,$query);

  ?>
  <div class="heading">

    <span class="email">&nbspEmail id: ashwinisamak93@gmail.com &nbsp</span>
    <span class="phone">Phone no.:&nbsp 9876543210 &nbsp  </span>
    <img class="logo" src="images\logo5.jpg" alt="logo" >
  <br>&nbsp &nbsp &nbspBUS TICKET RESERVATION PORTAL<br><br>
    </div>
  <div class="navbar">
      <a class="active" href="index.php"><span class="glyphicon glyphicon-home"> Home</a>

    <!-- <a href="D:\DBMS MINI PROJECT\cancellation.html"><span class="glyphicon glyphicon-remove"></span> Cancellation</a>-->
      <!--<a href="booking.php"><span class="glyphicon glyphicon-calendar"></span>  Book tickets</a>-->
       <a href="register.php"><span class="glyphicon glyphicon-search"></span>  Register</a>
       <a href="login.php"><span class="glyphicon glyphicon-user"></span>  Login</a>
      <a href="contact.php"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
        <a href="feedback.php"><span class="glyphicon glyphicon-envelope"></span>Feedback</a>


    </div>

    <img class="bus-images" src="images\bus-img5.jpg" alt="Bus">

    <div class="Content">

        List of available services across Karnataka:

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
    </div>

    </div>

<?php
echo "<div class='Content'>";
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
echo "</div>";
 ?>




</body>
</html>

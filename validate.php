<?php
      session_start();
      $con = mysqli_connect("localhost","root","","mini_project");
      if(!$con)
          {
      die('Could not connect: ' . mysql_error());
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST'){
      $query="SELECT * FROM users WHERE EMAIL='$_POST[Emailid]' AND PASSWD='$_POST[Password]'";
      $result=mysqli_query($con,$query);
      $value=mysqli_fetch_assoc($result);
    //  echo "userid:".$value['ID'];
     $numrows=mysqli_num_rows($result);
     if($numrows!=0){
    //  echo "<script language='javascript'>";
      // echo "alert('WRONG INFORMATION')";

       //echo "</script>";/
       $_SESSION['userid']=$value['ID'];

           header("location:dashboard.php");
      }
      else{
            /*echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            //header("location:login.php");
            echo "</script>";*/
            /*<<<_HTML_
               echo "<a href="login.php"> Go Back</a>
              _HTML_;*/

        echo "<link rel='stylesheet' href='css/style.css'>";
         echo "<script language='javascript'>";
         echo "alert('WRONG INFORMATION')";
         echo "</script>";
         echo "<body>";
         echo "<div class='heading'>";
        echo "<span class='email'>&nbspEmail id: ashwinisamak93@gmail.com &nbsp</span>";
         echo "<span class='phone'>Phone no.:&nbsp 9876543210 &nbsp  </span>";
         echo "<img class='logo' src='images\logo5.jpg' alt='logo' >";
       echo "<br>&nbsp &nbsp &nbspBUS RESERVATION PORTAL<br><br><br>";
         echo "</div>";
         echo "<br><br>";
         echo "<div style='width:300px;background-color:#fff;border-radius:5px;margin-left:460px;padding-left:15px;font-size:30px;text-align:center;'><br><br>";
         echo "<a href='login.php'>Go back</a><br><br></div>";
         echo "</body>";


         //header("location:login.php");



          }
        }



  //}


      ?>

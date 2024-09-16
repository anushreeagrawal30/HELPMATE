<?php
 // Include config file
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'newdatabase');
 
/* Attempt to connect to MySQL database */
  $conection_db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
  if($conection_db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  else {
    echo" connection successfull ";
  }

// Define variables 
$result="";
$emailNotRegistered=false;
$email=$_POST["email"];
$date1=$_POST["date1"];
$time=$_POST["time"];
$date=$_POST["date"];
$frequency=$_POST["frequency"];
$Duration=$_POST["Duration"];
$address=$_POST["address"];
$pincode=$_POST["pincode"];


//  // Validate email
//      // Prepare a select statement
//      $sql = "SELECT email FROM users";
//      $result = mysqli_query($conection_db, $sql); 
//      while($row = $result->fetch_assoc()) 
//      {

//       if($email==$row)
//      {
  $query = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conection_db, $query);
    
    if(mysqli_num_rows($result) > 0) {
        
      $sql = "INSERT INTO `bookings` (`email`,`date1`, `time`,`date`,`frequency`,`Duration`,`address`,`pincode`) VALUES ('$email','$date1','$time','$date','$frequency','$Duration','$address','$pincode')"; 
      $result = mysqli_query($conection_db, $sql); 
           
     
         if ($result) { 
                   //echo'<script>alert("booking successfull")</script>';
                   
                   echo "<script type='text/javascript'>alert('Congrats You Have Successfully Booked.');</script>";
                   echo "<script type='text/javascript'>window.location.href = 'book_next.html';</script>";
   
               }
               else{
               echo "<script type='text/javascript'>alert(' Booking Faild.');</script>";
              
               }


    } else {
       // Email does not exist
       //echo"email is not registerd";
      //  echo "<script type='text/javascript'>alert('This Email Is Not Registerd Please Registerd Before Booking.');</script>";
      // {header("location: book_next.html");}
      $emailNotRegistered = true;

      if ($emailNotRegistered) {
          echo "<script type='text/javascript'>alert('This Email Is Not Registered. Please Register Before Booking.');</script>";
          
         // header("Location: book_next.html");
         echo "<script type='text/javascript'>window.location.href = '../../index.html';</script>";
          exit(); // Ensure script execution stops after the redirect
      }
    
   
    }

     
    //  }
    //  else{
    //   echo"email not registerd";
      
    //  }

    //  }
     
     
  


//$sql = "INSERT INTO `bookings`('date','time','date','inst') values('$date','$time','$date','$inst')";

		 

?>
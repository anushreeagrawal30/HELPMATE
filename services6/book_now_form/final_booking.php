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
$area=$_POST["area"];
$road=$_POST["road"];
$colony=$_POST["colony"];
$homenumber=$_POST["homenumber"];
$pincode=$_POST["pincode"];
$email=$_POST["email"];


//$sql = "INSERT INTO `bookings`('date','time','date','inst') values('$date','$time','$date','$inst')";
  $sql = "INSERT INTO `address` ( `area`, `road`,`colony`,`homenumber`,`pincode`,`email`) VALUES ('$area','$road','$colony','$homenumber','$pincode','$email')"; 
  $result = mysqli_query($conection_db, $sql); 
        
	
			if ($result) { 
                //echo'alert("booking successfull")';
                header("location: book_next.html");

            }
            else{
                echo"booking failed";
            }
		 

?>
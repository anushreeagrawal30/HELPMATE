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
//$date1=$_POST["date1"];
$full_name=$_POST["full_name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$message=$_POST["message"];


$sql = "INSERT INTO `contact`(full_name,phone,email,message) values('$full_name','$phone','$email','$message')";

   $result = mysqli_query($conection_db, $sql); 
        
	
			if ($result) { 
        echo "<script type='text/javascript'></script>";
        header("location:contact.html");
       

               

            }
            else{
                echo"booking failed";
            }
		 

?>
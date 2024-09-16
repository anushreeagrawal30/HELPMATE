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
$address=$_POST["address"];
$a1=$_POST["a1"];
$a2=$_POST["a2"];
$a3=$_POST["a3"];

$sql = "INSERT INTO `workers`(full_name,phone,address,a1,a2,a3) values('$full_name','$phone','$address','$a1','$a2','$a3')";

   $result = mysqli_query($conection_db, $sql); 
        
	
			if ($result) { 
                echo'alert("Registration Successfull")';
                header("location: ../index.html");
               

            }
            else{
                echo"booking failed";
            }
		 

?>
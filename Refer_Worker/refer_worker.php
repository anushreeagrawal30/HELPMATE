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
 //   echo" connection successfull ";
  }
// Define variables 
$result="";
//$date1=$_POST["date1"];
$Worker_Name=$_POST["Worker_Name"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$a1=$_POST["a1"];
$a2=$_POST["a2"];
$a3=$_POST["a3"];
$Full_Name=$_POST["Full_Name"];
$phone2=$_POST["phone2"];
$upi_id=$_POST["upi_id"];

$sql = "INSERT INTO `refer_workers`(Worker_Name,phone,address,a1,a2,a3,full_name,phone2,upi_id) values('$Worker_Name','$phone','$address','$a1','$a2','$a3','$Full_Name','$phone2','$upi_id')";

   $result = mysqli_query($conection_db, $sql); 
        
	
			if ($result) { 
           
                echo "<script type='text/javascript'></script>";
                header("location: ../index.html");

            }
            else{
               // echo"booking failed";
                echo "<script type='text/javascript'>alert('booking failed');</script>";
            }
		 

?>
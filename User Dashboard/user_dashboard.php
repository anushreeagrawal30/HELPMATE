
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
<?php
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
 

$sql = "SELECT Email,Name FROM users";
//$result = $conn->query($sql);
$result = mysqli_query($conection_db, $sql); 

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
     
       // echo "<br>  Name: ". $row["Name"]. " Email " . $row["Email"] . "<br>";
    
}
 else {
    echo "0 results";
}

?>

  <img class="background" src="Images5/BannerImg5.jpg" alt="banner">
    <h1 class="Head">My Account</h1>
    <hr class="orangeline">
    <h2 class="Head2">User Info</h2><p1>Your credentials and saved addresses.</p1>
    <div class="main">
        <p2>Personal Information</p2>
        <hr class="orangeline2">
        <?php echo "<p3>NAME:".$row["Name"]?> </p3>
        <?php echo "<p3>Email:".$row["Email"]?> </p3>
        <img class="profile" src="Images5/profile.png" alt="profile">
    </div>
    <div class="Address">
        <p6>Addresses</p6>
        <hr class="orangeline3">
        <div class="map">
        <textarea class="Textarea" id="address-textarea" class="Textarea" placeholder="Enter your address"></textarea><br>
        <button class="Button" onclick="showSelectedAddress()">Add new address</button>
    </div>
    </div>
    <div class="BookingDeets">
        <p7>Booking Details:</p7>
        <hr class="orangeline4">
        <p8>Service</p8><!-- ADD THE SERVICE HERE, EX: DOMESTIC HELP-->
        <p9>Date of Booking</p9><!-- ADD DATE OF BOOKING HERE (THE DATE ON WHICH BOOKING WAS MADE)-->
        <p10>Duration</p10><!-- ADD DURATION HERE, D/W/M/Y-->
                         <!-- ADD WHETHER IT IS HOURLY OR FULL DAY-->
        <p11>Start Date</p11><!-- ADD THE START DATE HERE (THE DATE ON WHICH USER WANTS THE BOOKING TO PROCEED)-->
        <p12>Notes</p12><!-- ADD THE NOTES HERE / NA-->            
    </div>
    <div class="payment">
        <p13>Payment</p13>
        <hr class="orangeline5">
        <p14>Scan the QR code for payment:</p14>
        <img class="QRcode" src="Images5/QR.jpeg" alt="QR">
        </div>
<script src="script5.js"></script>
<?php
mysqli_close($conection_db);
?>
</body>
</html>


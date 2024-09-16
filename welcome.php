<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Signin Simple</title>

<link rel="stylesheet" href="style.css" />
<link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
crossorigin="anonymous"
    />
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body>
<div class="container">
      <nav>
        <ul>
          <li>
            <a href="#" class="logo">
              <img src="assets/logo.png" />
              <!-- <span class="nav-item">Admin</span> -->
              <h1 class="h3 mb-0">My Profile</h1>
             
            </a>
            <?php  if (isset($_SESSION['email'])) : ?>
            <p class="btn btn-primary login-btn btn-block">Logged in as: <?php echo $_SESSION['email']; ?></p>
            <?php endif ?>
          </li>
          <li>
            <a href="#dashboard" onclick="showSection('dashboard')">
              <i class="fas fa-menorah"></i>
              
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          
          
          <li>
            <a href="#attendance" onclick="showSection('attendance')">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item"> My Bookings</span>
            </a>
          </li>
          <li>
            <a href="logout.php" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <span class="nav-item">Log out</span>
            </a>
          </li>
        </ul>
      </nav>

      <section class="main">
        <section class="section" id="dashboard">
          <h1>Dashboard</h1>
          <main>
            <div class="main__container">
              <!-- MAIN TITLE STARTS HERE -->

              <div class="main__title">
                <img src="assets/hello.svg" alt="" />
                <div class="main__greeting">
                  <h1>Hello, User</h1>
                  <p>Welcome to your user dashboard</p>
                </div>
              </div>

              <!-- MAIN TITLE ENDS HERE -->

              <!-- MAIN CARDS STARTS HERE -->
              <div class="main__cards" >
                <div class="card" >
                  <i
                    class="fa fa-user-o fa-2x text-lightblue" style="color:black"
                    aria-hidden="true" 
                  
                   class="card_inner" style="display:flex" >My Profile</i>
                    
              
                </div>

                
              </div>
              
            </div>
          </main>
            </section>
       
        <section class="section" id="report">
          <h1>Users</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>



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
 

$sql = "SELECT Email,Name,id FROM users ";
//$result = $conn->query($sql);
$result = mysqli_query($conection_db, $sql); 

if ($result->num_rows > 0) {
    // output data of each row
    // while($row = $result->fetch_assoc()) 
    // {
               ?>
     <tr>
     <td><?=$row["id"]; ?></td>
     <td><?=$row["Name"]; ?></td>
     <td><?=$row["Email"]; ?></td>
     <td>
       <button>Edit</button>
       <button>Delete</button>
     </td>
   </tr>
   </tbody>

    <?php
  
    // }
    
} 
 ?>
</table>
        
        </section>
        <section class="section" id="attendance">
          <div class="attendance-list">
            <h1>Bookings</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>BOOKING ID</th>
                  <th>Date of Booking:</th>
                  <th>Time of Booking:</th>
                  <th>Duration</th>
                  <th>Duration Charge</th>
                  <th>Start Date of booking</th>
                  
                  
                  <th>Address</th>
                  <th>Pin Code</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $emailmatch=$_SESSION['email'];
              
              $sqla = "SELECT * FROM bookings WHERE email = '{$emailmatch}' ";
 if(empty($sqla)){
  ?>
  <tr>BOOKING NOT AVAILABLE</tr> 

  <?php
 } 
 else{        
//$result = $conn->query($sql);
$result1 = mysqli_query($conection_db, $sqla); 

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) 
    {
               ?>
                <tr>
                  <td><?=$row["id"]; ?></td>
                  <td><?=$row["date1"]; ?></td>
                  <td><?=$row["time"]; ?></td>
                  <td><?=$row["frequency"]; ?></td>
                  <td><?=$row["duration"]; ?></td>
                  <td><?=$row["date"]; ?></td>
                  <td><?=$row["address"]; ?></td>
                  <td><?=$row["pincode"]; ?></td>
                  <td><button>View</button></td>
                </tr>
                
              </tbody>
              <?php
            }
          }
    
  } 
   ?>
            </table>
          </div>
        </section>
      </section>
    </div>

    <script>
      function showSection(sectionId) {
        const sections = document.querySelectorAll(".section");
        sections.forEach((section) => {
          section.style.display = section.id === sectionId ? "block" : "none";
        });
      }
      showSection("dashboard");
     
    </script>

</body>
</html>
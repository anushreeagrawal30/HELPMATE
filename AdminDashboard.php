<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome Cdn Link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
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
              <span class="nav-item">Admin</span>
            </a>
          </li>
          <li>
            <a href="#dashboard" onclick="showSection('dashboard')">
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#notification" onclick="showSection('notification')">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Notification</span>
            </a>
          </li>
          <li>
            <a href="#report" onclick="showSection('report')">
              <i class="fas fa-database"></i>
              <span class="nav-item">Users</span>
            </a>
          </li>
          <li>
            <a href="#bookings" onclick="showSection('bookings')">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Bookings</span>
            </a>
          </li>
          <li>
          <a href="#workers" onclick="showSection('workers')">
              <i class="fas fa-database"></i>
              <span class="nav-item">Workers</span>
            </a>
          </li>
          
          
          <li>

            <a href="alogout.php" class="logout">
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
                  <h1>Hello, HELPmate</h1>
                  <p>Welcome to your admin dashboard</p>
                </div>
              </div>

              <!-- MAIN TITLE ENDS HERE -->

              <!-- MAIN CARDS STARTS HERE -->
              <div class="main__cards">
                <div class="card">
                  <i
                    class="fa fa-user-o fa-2x text-lightblue"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Number of Users</p>
                    <span class="font-bold text-title">50</span>
                  </div>
                </div>

                <div class="card">
                  <i
                    class="fa fa-calendar fa-2x text-red"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Number of Bookings</p>
                    <span class="font-bold text-title">10</span>
                  </div>
                </div>

                <div class="card">
                  <i
                    class="fa fa-video-camera fa-2x text-yellow"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Booking Cancelled</p>
                    <span class="font-bold text-title">02</span>
                  </div>
                </div>

                <div class="card">
                  <i
                    class="fa fa-thumbs-up fa-2x text-green"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Number of visits</p>
                    <span class="font-bold text-title">100</span>
                  </div>
                </div>
              </div>
            
            </div>
          </main>
        </section>


        <section class="section" id="notification">
          <h1>Notifications</h1>
          <table class="table">
            <thead>
              <tr>
                
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Messege</th>
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
 

$sql = "SELECT full_name,phone,email,message FROM contact";
//$result = $conn->query($sql);
$result = mysqli_query($conection_db, $sql); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
               ?>
     <tr>
    
     <td><?=$row["full_name"]; ?></td>
     <td><?=$row["phone"]; ?></td>
     <td><?=$row["email"]; ?></td>
     <td><?=$row["message"]; ?></td>
     <td>
       <button>Edit</button>
       <button>Delete</button>
       
     </td>
   </tr>
   </tbody>

    <?php
  
    }
    
} 
 ?>
</table>
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

 
/* Attempt to connect to MySQL database */
$conection_db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conection_db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT Email,Name,id FROM users";
//$result = $conn->query($sql);
$result = mysqli_query($conection_db, $sql); 

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
    {
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
  
    }
    
} 
 ?>
</table>
        
        </section>
        <section class="section" id="bookings">
          <div class="bookings-list">
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
                  <th>Email</th>
                  <th>Address</th>
                  <th>Pin Code</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $sqla = "SELECT * FROM bookings";
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
                  <td><?=$row["email"]; ?></td>
                  <td><?=$row["address"]; ?></td>
                  <td><?=$row["pincode"]; ?></td>
                 
                  <td><button>View</button></td>
                </tr>
                
              </tbody>
              <?php
            }
    
  } 
   ?>
            </table>
          </div>
        </section>
        <section class="section" id="workers">
          <h1>Registered Workers</h1>
          <table class="table">
            <thead>
              <tr>
                
                <th>Name</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Occupation 1</th>
                <th>Occupation 2</th>
                <th>Occupation 3</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
              $sqla = "SELECT * FROM workers";
//$result = $conn->query($sql);
$result1 = mysqli_query($conection_db, $sqla); 

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) 
    {
               ?>
                <tr>
                <td><?=$row["full_name"]; ?></td>
                  <td><?=$row["phone"]; ?></td>
                  <td><?=$row["address"]; ?></td>
                  <td><?=$row["a1"]; ?></td>
                  <td><?=$row["a2"]; ?></td>
                  <td><?=$row["a3"]; ?></td>
                  
                 
                  <td><button>View</button></td>
                </tr>
                
              </tbody>
              <?php
            }
    
  } 
   ?>
            </table>
          </div>
        </section>
        

       
            </section>
</div>
<script>
        function confirmDelete(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>


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
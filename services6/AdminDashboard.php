<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Dashboard | By Anushree</title>
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
            <a href="#attendance" onclick="showSection('attendance')">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Bookings</span>
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
                    <p class="text-primary-p">Number of Subscribers</p>
                    <span class="font-bold text-title">578</span>
                  </div>
                </div>

                <div class="card">
                  <i
                    class="fa fa-calendar fa-2x text-red"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Times of Watching</p>
                    <span class="font-bold text-title">2467</span>
                  </div>
                </div>

                <div class="card">
                  <i
                    class="fa fa-video-camera fa-2x text-yellow"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Number of Videos</p>
                    <span class="font-bold text-title">340</span>
                  </div>
                </div>

                <div class="card">
                  <i
                    class="fa fa-thumbs-up fa-2x text-green"
                    aria-hidden="true"
                  ></i>
                  <div class="card_inner">
                    <p class="text-primary-p">Number of Likes</p>
                    <span class="font-bold text-title">645</span>
                  </div>
                </div>
              </div>
              <!-- MAIN CARDS ENDS HERE -->

              <!-- CHARTS STARTS HERE -->
              <div class="charts">
                <div class="charts__left">
                  <div class="charts__left__title">
                    <div>
                      <h1>Daily Reports</h1>
                      <p>Bhopal, Madhya Pradesh</p>
                    </div>
                    <i class="fa fa-usd" aria-hidden="true"></i>
                  </div>
                  <div id="apex1"></div>
                </div>

                <div class="charts__right">
                  <div class="charts__right__title">
                    <div>
                      <h1>Stats Reports</h1>
                      <p>Bhopal, Madhya Pradesh</p>
                    </div>
                    <i class="fa fa-usd" aria-hidden="true"></i>
                  </div>

                  <div class="charts__right__cards">
                    <div class="card1">
                      <h1>Income</h1>
                      <p>$75,300</p>
                    </div>

                    <div class="card2">
                      <h1>Sales</h1>
                      <p>$124,200</p>
                    </div>

                    <div class="card3">
                      <h1>Users</h1>
                      <p>3900</p>
                    </div>

                    <div class="card4">
                      <h1>Orders</h1>
                      <p>1881</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- CHARTS ENDS HERE -->
            </div>
          </main>
        </section>
        <section class="section" id="notification">
          <h1>Notification</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>sam@example.com</td>
                <td>123-456-7890</td>
                <td>Hello, this is a test message.</td>
                <td><button>Reply</button></td>
              </tr>
              <tr>
                <td>02</td>
                <td>balbina@example.com</td>
                <td>234-567-8901</td>
                <td>This is another test message.</td>
                <td><button>Reply</button></td>
              </tr>
              <tr>
                <td>03</td>
                <td>badan@example.com</td>
                <td>345-678-9012</td>
                <td>Testing message content here.</td>
                <td><button>Reply</button></td>
              </tr>
              <tr>
                <td>04</td>
                <td>sara@example.com</td>
                <td>456-789-0123</td>
                <td>Sample message for notification.</td>
                <td><button>Reply</button></td>
              </tr>
            </tbody>
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
                  <th>Details</th>
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
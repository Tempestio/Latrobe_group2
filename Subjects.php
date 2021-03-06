<!DOCTYPE html>
<html>
<head>
    <title>Latrobe Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.css" />
    <link href="StyleSheet7.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://www.webcodegeeks.com/wp-content/litespeed/localres/aHR0cHM6Ly9tYXhjZG4uYm9vdHN0cmFwY2RuLmNvbS8=bootstrap/3.3.4/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/evo-calendar.css" />
    <link rel="stylesheet" type="text/css" href="css/evo-calendar.royal-navy.css" />
    <link href="evo-calendar.min.css" rel="stylesheet" />
    <link href="evo-calendar.midnight-blue.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://www.webcodegeeks.com/wp-content/litespeed/localres/aHR0cHM6Ly9tYXhjZG4uYm9vdHN0cmFwY2RuLmNvbS8=bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        html, body, h1, h2, h3, h4, h5 {
            font-family: "Raleway", sans-serif
        }
    </style>
</head>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey"  onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Logo</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="images/icons/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome back, <strong>USER</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="dashboard.html" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="subjects.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Subjects</a>
    <a href="inputform.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Staff Details</a>
    <a href="profile.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  User Profile</a>
    <a href="https://nextjs-docs-tempestio.vercel.app/" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  System Documentation</a>
    <a href="index.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Logout</a><br><br>
  </div>
</nav>




<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">
        <h5><b><i class="fa fa-dashboard"></i>La-Trobe Subject Overview</b></h5>
    </header>
<body>


<H1>Subject List</H1>
<br>
<table>
  <thead>
    <tr>
      <th class="subject_table" scope="col">Subject Code</th>
      <th scope="col">Subject Name</th>
      <th scope="col">Prerequisites</th>
      <th scope="col">Subject Weight</th>
      <th scope="col">Commencement Months</th>
      <th scope="col">Status?</th>
    </tr>
  </thead>
  <?php

$conn = mysqli_connect(" database-2.c4fj7nfsjfzd.ap-southeast-2.rds.amazonaws.com", "admin", "adminadmin", "sys");
$sql = "SELECT * FROM  Subject";
$result = $conn->query($sql);

if ($result->num_rows > 0){
  while ($row = $result-> fetch_assoc()) {
    echo "<tr><td>" . $row["SubjectID"] . "</td><td>" . $row["SubjectName"] . "</td><td>" . $row["SubjectCode"] . "</td><td>";
  }
}
else {
  echo "No Results Found";
}
  ?>
</table>  



      </body>


    
    <!-- Footer -->
    <footer id="footer">
      <h4>La-Trobe Didasko Partnership</h4>
      <p>Created by Alex and Mitch<a href="https://tempestiodesigns.com" target="_blank"></a></p>
    </footer>

    <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>

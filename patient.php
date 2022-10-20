<?php
// header('location:index.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="patient_style.css">
<title>Document</title>

</head>
<body>
<nav>
<div class="left-links">
   
  
    <body>
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Dashboard</a>
      <a href="#">Book appointment</a>
      <a href="appHistory.php">Appointment History</a>
      <a href="medical-history.html">Medical History</a>
    </div> 
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>    
</div>
<div class="right-links">
   <a class="hms">Hospital Management System</a>

<a class="links" href="patient.php">Back</a>
<table>
            <tr>
                <td><img id="user" src="images/doctor.png" alt=""></td>
                <td>

                <?php
                $con = mysqli_connect('localhost', 'root', '');
                mysqli_select_db($con, 'medcare');
                $query = mysqli_query(
                    $con,
                    "select username from login where username='" .
                        $_SESSION['uname'] .
                        "';"
                );
                while ($row = mysqli_fetch_array($query)) {
                    echo $row['username'];
                }
                ?>
                </td>
            </tr>
          </table>
</div>
</nav>
<div class="dashboard">
    <div class="content">
        <h1>User dashboard </h1>
    </div>
    <div class="display">
        <div class="row">
            <div class="column" >
              <h2>Book my Appointment</h2>
             <a href="#">Book Appointment</a>
            </div>
            <div class="column" >
              <h2>My Appointments</h2>
              <a href="appHistory.php">View Appointment History</a>
            </div>
            <div class="column">
              <h2>My profile</h2>
              <a href="#">Update profile</a>
            </div>
          </div>
          
    </div>
</div>



<script src="index_patient.js"></script>
</body>
</html>
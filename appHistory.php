<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="patient_style.css">
<link rel="stylesheet" href="appt_style.css">
<title>Document</title>

</head>
<body>
<nav>
<div class="left-links">
   
  
    <body>
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="patient.html">Dashboard</a>
      <a href="Bookappt.html">Book appointment</a>
      <a href="appHistory.php">Appointment History</a>
      <a href="#">Medical History</a>
    </div> 
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>    
</div>
<div class="right-links">
   <a class="hms">Hospital Management System</a>

<a class="links" href="patient.php">Back</a>
</div>
</nav>
<h1>Your appointments are as follows</h1>
<table id="appts">
  <tr>
    <th>Doctor</th>
    <th>Specialization</th>
          <th>Consultancy fee</th>
          <th>Appointment Date / Time</th>
          <th>Appointment Creation Date</th>
          <th>Current Status</th>
          <th>Action</th>
  </tr>
 <?php
 $con = mysqli_connect('localhost', 'root', '');
 mysqli_select_db($con, 'medcare');
 $uname = $_SESSION['email'];
 $query = "select * from apptdetails where id='$uname'";
 $result = mysqli_query($con, $query);

 while ($row = mysqli_fetch_array($result)) {
     echo "<tr>
     <td>" .
         $row['dname'] .
         "</td>
     <td>" .
         $row['spec'] .
         "</td>
     <td>" .
         $row['fee'] .
         "</td>
     <td>" .
         $row['date'] .
         "</td>
     <td>" .
         $row['cdate'] .
         "</td>
     <td>" .
         $row['status'] .
         "</td>
    <td><a href='#'>START</a></td>
    </tr>";
 }
 ?>
</table>
<!-- <div class="app-hist" id="app-hist">
    <div class="content">
      <p>User | Appointment History</p>
      <table>
        <tr>
          <th>#</th>
          <th>Doctor Name</th>
          <th>Specialization</th>
          <th>Consultancy fee</th>
          <th>Appointment Date / Time</th>
          <th>Appointment Creation Date</th>
          <th>Current Status</th>
          <th>Action</th>
        </tr>
        
      </table>
    </div>
    
</div> -->


<script src="index_patient.js"></script>
</body>
</html>
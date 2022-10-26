<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="bookAptstyle.css">
<title>Document</title>

</head>
<body>
<nav>
<div class="left-links">
   
  
    <body>
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="patient.html">Dashboard</a>
      <a href="bookappt.php">Book appointment</a>
      <a href="appoinmenthistory.html">Appointment History</a>
      <a href="#">Medical History</a>
    </div> 
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>    
</div>
<div class="right-links">
   <a class="hms">Telemedicine Services</a>

<a class="links" href="patient.php">Back</a>
</div>
</nav>

 
<div class="container">
  
  <form name="register" action="bookApt.php" method="post" onsubmit="return formValidation() ">
    <table>
      <tr>
        <td>
          <label for="Doctor-specialisation">Doctor Specialisation:    </label><br>
          <select name="Doctor-specialisation" id="Doctor-specialisation">
              <option value="Radiology">Radiology</option>
            <option value="Gynecologist">Gynoecologist</option>
            <option value="Orthopedics">Orthopedics</option>
            <option value="Pediatrics">Pediatrics</option>
          </select>
        </td>
      </tr>
      <tr>
        <tr>
          <td>
            <label for="Doctor-name">Doctor name : </label><br>
            <select name="Doctor-name" id="Doctor-name">
              <option value="Nickel">Nickel</option>
              <option value="dave">Dave</option>
              <option value="Dasy">Dasy</option>
              <option value="Regie">Regie</option>
            </select>
          </td>
        </tr>
      <tr>
        <td><label for="date">Date</label></td>
        <tr><td><input type="datetime-local" name="date" id="date" placeholder="your name"></td></tr>
      </tr>
      <!-- <tr>
        <td><label for="time">Time</label></td></tr>
        <tr><td><input type="time" name="time" id="time" placeholder="your name"></td></tr>
      </tr> -->
      
     
      <tr>
        <td colspan="2"><input type="submit" class="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</div>


<script src="index.js"></script>
</body>
</html>
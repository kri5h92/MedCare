<?php
session_start();
$doctor = $_POST['Doctor-name'];
$doctorSpec = $_POST['Doctor-specialisation'];
$date = $_POST['date'];
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'medcare');
$username = $_SESSION['email'];
$sql = "insert into apptdetails (id,dname,spec,date) values ('$username','$doctor','$doctorSpec','$date')";
$result = mysqli_query($con, $sql);
if ($result) {
    echo '<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
    
        $(document).ready(function() {
            swal({
                title: "Appointment booked",
                text: "Appointment booked",
                icon: "success",
                button: "Ok",
                timer: 2000
            }).then(function(){
                window.location="patient.php";
            });
        });
    </script>';
}
?>

<?php
// header('location:index.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard_style.css">
</head>

<body>
    <div class="header">
        <a href="#default" class="logo">CompanyLogo</a>
        <div class="header-right">
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
      </div>
</body>
</html>
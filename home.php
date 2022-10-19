<?php
session_start();
$name = $_SESSION['uname'];
echo 'welcome ' . $name;
?>

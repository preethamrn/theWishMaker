<?php
$con = mysqli_connect("localhost", "root", "");
if(!$con) {
    die('*Cannot connect to MySQL DB:' . mysqli_error() . '*');
}

mysqli_select_db($con, "thewishmaker");
?>
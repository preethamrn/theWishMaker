<?php
    require('connect.php');

    $list = mysqli_query($con,"SELECT * FROM `charitylist` ORDER BY `score` DESC, `name` ASC LIMIT 0,6"); //shows 6 charities at start
    while($row = mysqli_fetch_array($list)) {
        include('charitydisplay.php');
    }
?>
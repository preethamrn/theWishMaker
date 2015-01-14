<?php
    $load_per_scroll = 2; //number of charities to load everytime it scrolls down
    require('connect.php');
    $load = htmlentities(strip_tags($_POST['load'])) * $load_per_scroll;
    $list = mysqli_query($con,"SELECT * FROM `charitylist` ORDER BY `score` DESC, `name` ASC LIMIT ".$load.",".$load_per_scroll);
    while($row = mysqli_fetch_array($list)) {
        include('charitydisplay.php');
    }
?>
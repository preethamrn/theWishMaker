<?php
if(isset($_POST['submit'])) {
    require('connect.php');
    $link = mysqli_real_escape_string($con, $_POST['link']);
    $link = trim($link);
    $link = strip_tags($link);
    $link = addhttp($link);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $name = trim($name);
    $name = strip_tags($name);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $description = trim($description);
    $description = strip_tags($description);
    
    if(!empty($link) && !empty($name) && !empty($description)) {
        $sql = "INSERT INTO charitylist (link, name, description) VALUES ('$link', '$name', '$description');";
        echo "<br/><font color='#19fa11'>Thank you for your contribution.</font>";
        if(!mysqli_query($con,$sql)) {
            die('<br/>Data send Error: ' . mysqli_error($con));
        }
    } else {
        echo "<br/><font color='#d40000'>A required field may not have been filled</font>";
    }

    mysqli_close($con);
}

function addhttp($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}
?>
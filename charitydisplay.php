<?php
    $i = $row['primary'];
    $link = htmlspecialchars($row['link']);
    $name = htmlspecialchars($row['name']);
    $description = htmlspecialchars($row['description']);


    echo "<div class='items'>
        <form method = 'post' action=''>
        <div class='buttons' style='float:right;'><button class='action green' name='subscribe[]' value='{$i}' onclick='alert(\"To be implemented later\"); event.preventDefault();'><span class='label'>Subscribe!</span></button></div>
        <div class='buttons' style='float:right;'><button class='action blue' name='donate[]' value='{$i}' onclick='alert(\"To be implemented later\"); event.preventDefault();'><span class='label'>Donate!</span></button></div>
        <div class='show-popup'><div class='buttons' style='float:right;'><button class='action red' name='share[]' value='{$i}'><span class='label'>Share!</span></button></div></div>
        </form>
        <div class='item-heading'><a href='".$link."'>".$name."</a></div>
        <div class='item-details'>".$description."</div>
        <div class='show-more'><a href=''>SHOW MORE</a></div>";
?>

<div class='overlay-bg'><div class='overlay-content'><div class='<?php echo $i; ?>'>
    <div><a href='<?php echo $link; ?>'><?php echo $name; ?></a></div>
    <div class='item-details'><?php echo $description; ?></div>
    <div class='show-more'><a href=''>SHOW MORE</a></div>
    <div class='buttons' style='float:right;' onclick="shareToFB<?php echo "('".$name."','".$link."')"; ?>"><button class='action blue'><span class='label'>Share to Facebook!</span></button></div>
    
</div>
</div>
</div>
</div><hr> 

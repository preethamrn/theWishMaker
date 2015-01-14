<?php
echo "<div class='banner'><a href='index.php'>TheWishMaker</a></div>
<div class='sidebar'>
    <div class='sidebar-links' onclick='alert(\"You do not have permissions to perform this action\"); event.preventDefault();'><a href=''>Admin</a></div>
    <div class='sidebar-links' onclick='alert(\"You do not have permissions to perform this action\"); event.preventDefault();'><a href=''>Settings</a></div>
    <div class='sidebar-links'><a href='create.php'>Create</a></div>
    <div class='sidebar-links' onclick='alert(\"You do not have permissions to perform this action\"); event.preventDefault();'><a href=''>Database Refactoring</a></div>
    <div class='sidebar-links' onclick='alert(\"You do not have permissions to perform this action\"); event.preventDefault();'><a href=''>SignIn</a></div>
    <div class='sidebar-links' onclick='alert(\"You are not signed in yet\"); event.preventDefault();'><a href=''>Logout</a></div>
    <div class='sidebar-links' onclick='alert(\"Website created by Preetham Reddy N.\"); event.preventDefault();'><a href=''>About</a></div>
</div>
<div class='ticker'>TICKER!</div>";
?>
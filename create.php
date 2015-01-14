<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <link rel="stylesheet" type="text/css" href="css3-buttons.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <title>Create</title>
    </head>

    <body>
        <?php include'banner_sidebar_ticker.php';?>
        <div class="main-center">
            <table style="width:100%">
                <form action="create.php" method = "post">
                    <tr><td>*Name:</td>  <td><input name="name" type="text" style = "width:95%; float: left;" value = "<?php if(isset($_POST['name'])) { echo htmlentities ($_POST['name']); }?>"/></td></tr>
                    <tr><td width="15%">*Link:</td>  <td width="85%"><input name="link" type="text" style = "width:95%; float: left;" value = "<?php if(isset($_POST['link'])) { echo htmlentities ($_POST['link']); }?>"/></td></tr>
                    <tr><td>*Description:</td>  <td><textarea name="description" rows = "5" style = "width:95%; float: left;"><?php if(isset($_POST['description'])) { echo htmlentities ($_POST['description']); }?></textarea></td></tr>
                    <tr><td><div class='buttons'><button class='action' name='submit' value='Submit' type='submit'><span class='label'>Submit</span></button></div></td></tr>
                </form>
            </table>
            <font color = 'red'>* - Required field</font>
            <?php include('sendcharity.php')?>
        </div>
    </body>
</html>
<?php include_once("./headn.php"); ?>

<?php

if(isset($_SESSION['UserName']))
{
    unset($_SESSION);
    session_destroy();
    header("location:loginn.php");
    
}

?>

<?php include_once("./foot.php"); ?>
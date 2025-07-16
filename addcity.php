<?php include_once("./head.php"); ?>
<form method="post">
city: <input type="text" name='ct'>
state: <input type="text" name='stt'>
<div>
        <input type="submit" name="subBtn">
        </div>
</form>
<?php

extract($_POST);
if(isset($subBtn))
{
    echo "works";
     include_once("./db_detail.php");
     $link=mysqli_connect($hostname,$username,$password,$databasename);
     $qry="insert into city(state,city)values('$stt','$ct')";
    $r=mysqli_query($link,$qry);
    if($r==1)
    {
        echo "<br> Record Updated..";
    }
    else
    {
        echo "<br>failure..";
    }
     mysqli_close($link);
}

?>
<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<?php
        include_once("./db_detail.php");
        $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="select * from city";
       $resultset= mysqli_query($link,$qry);
       $ar=[];
    
       while($row=mysqli_fetch_assoc($resultset))
    {
        extract($row);
        array_push($ar,$state);
    }
    $r=array_unique($ar);
    ?>
    <input type="text" name="entry" list="myList">
    <datalist id="myList">
    <?php
    foreach($r as $op)
    {

        echo "<option>$op</option>";
    }
    ?>
</datalist>
<input type="submit" name="disBtn" value="Dispaly Data">
<?php
extract($_POST);
if(isset($disBtn))
{
    include_once("./db_detail.php");
    $link=mysqli_connect($hostname,$username,$password,$databasename);
    $qry="select * from city where state='$entry'";
    $resultset= mysqli_query($link,$qry);
    $row=mysqli_fetch_assoc($resultset);
    extract($row);
}
?>
<input type='text' name='u_roll' value="<?php if(isset($disBtn)) 
            {
                echo $city;
            } ?>">
            <input type='text' name='u_roll' value="<?php if(isset($disBtn)) 
            {
                echo $state;
            } ?>">
</form> -->
<?php 
mysqli_close($link);
include_once("./foot.php"); ?>
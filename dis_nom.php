<?php include_once("./head.php"); ?>
<form method='post'>
<?php
        include_once("./db_detail.php");
        $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="select city from city";
       $resultset= mysqli_query($link,$qry);
       $ar=[];
    
       while($row=mysqli_fetch_assoc($resultset))
    {
        extract($row);
        array_push($ar,$city);
    }
    $r=array_unique($ar);
    ?><label>Enter Constituency</label>
    <input type="text" name="entry" list="myList">
    <datalist id="myList">
    <?php
    foreach($r as $op)
    {

        echo "<option>$op</option>";
    }
    ?>
</datalist>
<input type="submit" name="disBtn" value="show Nominee">
</form>
<table border="2px" align="center" width="400px" cellspacing="0px">
        <tr><th>Name</th><th>number</th><th>status</th></tr>

<?php
extract($_POST);
if(isset($disBtn))
{
include_once("./db_nom.php");
        $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="select name,Number,status from nominee where const='$entry'";
       $resultset= mysqli_query($link,$qry);
       while($row=mysqli_fetch_assoc($resultset))
{
?>
        <tr><td><?php echo $row['name']; ?></td><td><?php echo $row['Number']; ?></td><td><?php echo $row['status']; ?></td></tr>
<?php
}
}
?>
</table>
<?php include_once("./foot.php"); ?>
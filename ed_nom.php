<?php include_once("./headn.php"); ?>
<div>
    <a href="./Mainpagen.php" class='btn btn-primary'>Go Back</a>
</div>
<?php
extract($_POST);
include_once("./db_nom.php");
        $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="select * from nominee where aadhar='$_SESSION[UserName]'";
       $resultset= mysqli_query($link,$qry);
       $row=mysqli_fetch_assoc($resultset);

?>
<form method="post" enctype='multipart/form-data'>
        <table border="2px" align="center" width="400px" cellspacing="0px">
            <tr><th colspan="2"><h4>Registration Form</h4></th></tr>
            <tr><th>Nominee Details</th></tr>
            <tr><td>Name</td><td><input name="unm" value="<?php echo $row['name']; ?>" size="15" disabled></td></tr>
            <tr><td>Aadhar No.</td><td><input name="aadhar" value="<?php echo $row['aadhar']; ?>" type="text" minlength="12" maxlength="12" disabled></td></tr>
            <tr><td>Moblile</td><td><input name="mob" size="15" value="<?php echo $row['Number']; ?>" type="text" pattern="[0-9]{3,}" disabled></td></tr>
            <tr><td>Date of Birth</td><td><input name="dt" type="Date" value="<?php echo $row['DOB']; ?>" min="1925-10-05" max="1999-05-07" disabled></td></tr>
            <tr><td>Gender</td><td><input type="text" value="<?php echo $row['gen']; ?>" disabled></td></tr>
            <tr><td>Caste</td><td><input type="text" value="<?php echo $row['caste']; ?>" disabled>  
        </td></tr>
            <tr>
                <td>Address</td>
                <td><input type=text rows="5" cols="45" name="ad" value="<?php echo $row['address']; ?>" disabled></td>
            </tr>
            <tr><td>Passport Size Image</td><td><img src="<?php echo $row['img']; ?>" alt="" size='50px'></td></tr>
            <tr><td>Nominee challan</td><td><img src="<?php echo $row['aimg']; ?>" alt="" size='10%'></td></tr>
            <tr>
                <td>Constituency</td>
                <td>
                <input type="text"  value="<?php echo $row['const']; ?>"disabled>
                </td>
            </tr>
            <tr><td>Party</td>
            <td>
            <input type="text"  value="<?php echo $row['party']; ?>"disabled>
                
                </td></tr>
                <tr><td>Status</td>
            <td>
            <input type="text"  value="<?php echo $row['status']; ?>"disabled>
                
                </td></tr>
            
        </table>
        <div>
            <input type="submit" value="Cancel my nomination" name='cBtn' class='btn btn-danger'>
        </div>
        <?php
        extract($_POST);
        if(isset($cBtn))
        {
            
            $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="update nominee set status='evicted' where aadhar='$_SESSION[UserName]'";
       $resultset= mysqli_query($link,$qry);

        }
        ?>
</form>
        <br><br>

<?php include_once("./foot.php"); ?>
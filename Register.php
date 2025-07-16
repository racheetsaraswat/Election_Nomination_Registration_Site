<?php include_once("./head.php"); ?>

<form method="post" enctype='multipart/form-data'>
        <table border="2px" align="center" width="400px" cellspacing="0px">
            <tr><th colspan="2"><h4>Registration Form</h4></th></tr>
            <tr><th>Nominee Details</th></tr>
            <tr><td>Name</td><td><input name="unm" placeholder="Enter your name" size="15" required></td></tr>
            <tr><td>Aadhar No.</td><td><input name="aadhar" type="text" minlength="12" maxlength="12" required></td></tr>
            <tr><td>Moblile</td><td><input name="mob" size="15" type="text" pattern="[0-9]{3,}" required></td></tr>
            <tr><td>Date of Birth</td><td><input name="dt" type="Date" min="1925-10-05" max="1999-05-07"></td></tr>
            <tr><td>Gender</td><td><input type="radio"name="gen" value="M">Male<input type="radio" name="gen"value="F">Female</td></tr>
            <tr><td>Caste</td><td><input type="radio"name="caste" value="GR">General<input type="radio" name="caste"value="SC">SC <br>
            <input type="radio"name="caste" value="ST">ST<input type="radio"name="caste" value="OBC">OBC          
        </td></tr>
            <tr>
                <td>Address</td>
                <td><textarea rows="5" cols="45" name="ad"></textarea></td>
            </tr>
            <tr><td>Upload Passport Size Image</td><td><input type='file' name='fin' required></td></tr>
            <tr><td>Upload Nominee challan</td><td><input type='file' name='aimg'></td></tr>
            <tr>
                <td>Enter Constituency</td>
                <td>
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
                </td>
            </tr>
            <tr><td>Enter Party</td>
            <td>
                <?php
        include_once("./db_detail.php");
        $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="select * from party";
       $resultset= mysqli_query($link,$qry);
       $pr=[];
    
       while($row=mysqli_fetch_assoc($resultset))
    {
        extract($row);
        array_push($pr,$party);
    }
    $rr=array_unique($pr);
    ?>
    <input type="text" name="entry2" list="myList2">
    <datalist id="myList2">
    <?php
    foreach($rr as $op)
    {

        echo "<option>$op</option>";
    }
    ?>
</datalist>
                </td></tr>
            
        </table>
        <div>
            <h4>
                I hereby make sure that:
            </h4>
            <ul>
                <li>I am a citizen of India</li>
                <li>I have crossed over 25 years of Age</li>
                <li>I am not convicted in any of the criminal offense as per constitution of India</li>
                <li>I am a registerd Indian Voter</li></ul>
                
                <input type="checkbox" required name="Oath" value="Oath">Accept All Terms of Oath
            
        </div>
        <br><br>
        <div>
        <input type="submit" name="subBtn"><input type="reset">
        </div>
        <?php
function ufin()
{
    $img_path=null;
    $exts=array("jpg","gif","png","jpeg");
    $File_arr=$_FILES['fin'];
    $fn=$_FILES["fin"]["name"];
    $exp=explode(".",$fn);
    $ext=end($exp);
    if($File_arr['error']==0)
    {
        if(in_array($ext,$exts))
        {
            
            $tmp=$File_arr['tmp_name'];
            $final_path=$_SERVER['DOCUMENT_ROOT']."/major/nom_data/".$File_arr['name'];
            move_uploaded_file($tmp,$final_path);
            $img_path="/major/nom_data/".$File_arr['name'];

            return $img_path;

        }
        else
        {
            echo "<br>error...";
        }

    }
    else
    {
        echo "<br> File Uplaod Failed...<br>";
    }
}
function upaimg()
{
    $aimg_path=null;
    $exts=array("jpg","gif","png","jpeg");
    $File_arr=$_FILES['aimg'];
    $fn=$_FILES["aimg"]["name"];
    $exp=explode(".",$fn);
    $ext=end($exp);
    if($File_arr['error']==0)
    {
        if(in_array($ext,$exts))
        {
            
            $tmp=$File_arr['tmp_name'];
            $final_path=$_SERVER['DOCUMENT_ROOT']."/major/nom_data/".$File_arr['name'];
            move_uploaded_file($tmp,$final_path);
            $aimg_path="/major/nom_data/".$File_arr['name'];

            return $aimg_path;

        }
        else
        {
            echo "<br>error...";
        }

    }
    else
    {
        echo "<br> File Uplaod Failed...<br>";
    }
}
extract($_POST);
if(isset($subBtn))
{
    
     include_once("./db_nom.php");
     $link=mysqli_connect($hostname,$username,$password,$databasename);
     $img_path=ufin();
     $aimg_path=upaimg();
     $qry="insert into nominee(name, aadhar, Number, DOB, address, const,party, img, aimg, gen, caste,status) values ('$unm' ,$aadhar,$mob,'$dt','$ad','$entry','$entry2','$img_path','$aimg_path','$gen','$caste','pending')";
    $r=mysqli_query($link,$qry);
    mysqli_close($link);
    if($r==1)
    {
        header('location:confirm.php');
    }
    else
    {
        echo "<div class='alert alert-success' role='alert'><br> <h4>Failure..</h4></div>";
    }

}

?>


        </form>


<?php include_once("./foot.php"); ?>
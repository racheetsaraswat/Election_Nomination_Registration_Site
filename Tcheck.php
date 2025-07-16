<?php
 $msg=<<<T
 <script type="text/javascript">
 alert("Invalid Login");
 </script>
T;
if(!empty($l_ID) and !empty($l_pwd))
    {
        include_once("./db_nom.php");
        $link=mysqli_connect($hostname,$username,$password,$databasename);
        $qry="select * from nominee where aadhar='$l_ID' and DOB='$l_pwd'";
        $resultset= mysqli_query($link,$qry);
        $nr=mysqli_num_rows($resultset);
        if($nr)
        {
                session_start();
            $_SESSION["UserName"]=$l_ID;
            
            $_SESSION["Password"]=$l_pwd;
            $data=mysqli_fetch_assoc($resultset);
            extract($data);
            echo $stuname,"<br>";
            // echo $mailid,"<br>";
            $_SESSION['Nominee']=$name;
            setcookie("MyCookie",$name,time()+1500);
            header("location:MainPagen.php");
        }
        else
        {
            echo $msg;
        }
    }
    else
    {
        echo $msg;
    }
?>
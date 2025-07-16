<?php include_once("./headn.php"); ?>

<header align="center">
<div>
                <div>
                    <table align="center">
                        <tr>
                            <td align="left" valign="top">
                                <img src="Logo/HeaderLogo.png" alt="" width="134" />
                            </td>
                            <td align="center" valign="top">
                                <div style="text-align: center; font-size: 50px; color: #891518; font-family: Arial; letter-spacing: 2px; font-variant: small-caps;">
                                     Election Commission
                                </div>
                                <div style="text-align: center; font-size: 45px; color: #891518; font-family: Arial; letter-spacing: 2px; font-variant: small-caps;">
                                    INDIA
                                </div>
                            </td>
                            <td align="right" valign="top">
                                <img src="Logo/HeaderLogo.png" alt="" width="134" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php include_once("./navbarn.php"); ?>    
    </header>
    <div class='row'>
        <div class='col-md-2'>
            <h4 class='text-danger'>Notice Board</h4>
            <marquee direction="up" onmouseover="stop()" onmouseout="start()">
<div><a href="./Notice/SampleNotice1.pdf" target="_blank">Notice-Dated-12/07/2023</a>
</div>
<div><a href="./Notice/SampleNotice2.pdf" target="_blank">Notice-Dated-15/07/2023</a>
</div>
<div><a href="./Notice/SampleNotice3.pdf" target="_blank">Notice-Dated-18/07/2023</a>
</div>
</marquee>
</div>
<div class='col-md-8'>
    <iframe name="myFrame" width="100%" height="600px"></iframe>
</div>
</div>

<?php include_once("./foot.php"); ?>
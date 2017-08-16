<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Drop my cv</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <table border="0" align="left" cellpadding="5" cellspacing="0" width="400px" style="overflow: visible;">
                <tr>
                    <td bgcolor='#333333' colspan='2' height='52'><p style='font-size:16px; font-family:Arial, Helvetica, sans-serif; color:#2d8af4; margin-left:11px'>DROP MY CV</p></td>
                </tr>
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong>First Name: </strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo isset($first_name)?$first_name:''; ?></p>
                    </td>
                </tr>  
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong>Last Name: </strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo isset($last_name)?$last_name:''; ?></p>
                    </td>
                </tr>  
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Email:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo isset($email)?$email:''; ?></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Contact:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo isset($contact)?$contact:''; ?></p>
                    </td>
                </tr>
                
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Applied For:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo isset($applied_for)?$applied_for:''; ?></p>
                    </td>
                </tr>


            </table>
        </div>
    </body>
</html>

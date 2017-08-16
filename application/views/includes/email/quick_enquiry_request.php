<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Enquiry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <table border="0" align="left" cellpadding="5" cellspacing="0" width="400px" style="overflow: visible;">
                <tr>
                    <td bgcolor='#333333' colspan='2' height='52'><p style='font-size:16px; font-family:Arial, Helvetica, sans-serif; color:#2d8af4; margin-left:11px'><?php echo $title;?></p></td>
                </tr>
                <?php if (isset($type) && ($type === 'project' || $type === 'property')) { ?>

                    <tr>
                        <td bgcolor='#666666' height='40'>
                            <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong><?php echo ($type === 'project' ? 'Project Ref:' : 'Property Ref:'); ?> </strong></p>
                        </td>
                        <td bgcolor='#666666' height='40'>
                            <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo $reference_no; ?></p>
                        </td>
                    </tr>  
                    <tr>
                        <td bgcolor='#666666' height='40'>
                            <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong><?php echo ($type === 'project' ? 'Project Name:' : 'Property Name:'); ?> </strong></p>
                        </td>
                        <td bgcolor='#666666' height='40'>
                            <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo $reference_name; ?></p>
                        </td>
                    </tr>  
                    <?php }
                ?>
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Name:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo $author; ?></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Email:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo $email; ?></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Contact:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;'><?php echo $contact; ?></p>
                    </td>
                </tr>
                <tr>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px'><strong> Message:</strong></p>
                    </td>
                    <td bgcolor='#666666' height='40'>
                        <p style='font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold;word-break: break-all;'><?php echo $message; ?></p>
                    </td>
                </tr>



            </table>
        </div>
    </body>
</html>

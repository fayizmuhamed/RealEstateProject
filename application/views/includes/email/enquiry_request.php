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
                    <td bgcolor='#333333' colspan='2' height='52'><p style='font-size:16px; font-family:Arial, Helvetica, sans-serif; color:#2d8af4; margin-left:11px'><?php echo $title; ?></p></td>
                </tr>
                <?php
                $display_names = array(
                    'author_name' => 'Author Name',
                    'author_email' => 'Author Email',
                    'author_contact' => 'Author Mobile No',
                    'project_ref_no' => 'Project Ref No',
                    'project_name' => 'Project Name',
                    'property_ref_no' => 'Property Ref No',
                    'property_title' => 'Property Title',
                    'property_type' => 'Property Type',
                    'location' => 'Location',
                    'bedrooms' => 'No Of Bedrooms',
                    'study_or_maid' => 'Study/Maid',
                    'furnish' => 'Furnished/Un Furnished',
                    'budget' => 'Budget',
                    'agent' => 'Agent',
                    'preferred_call_back_time' => 'Preferred Call Back Time',
                    'message' => 'Message'
                );
                foreach ($data as $key => $value) {

                    $display_name = $display_names[$key];

                    echo '<tr>';
                    echo '<td bgcolor="#666666" height="40">';
                    echo '<p style = "font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-left:11px"><strong>' . $display_name . ': </strong></p>';
                    echo '</td>';
                    echo '<td bgcolor="#666666" height="40">';
                    echo '<p style = "font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#FFFFFF; font-weight:bold; margin-right:11px">' . $value . '</p>';
                    echo '</td>';
                    echo '</tr>';
                    }
                ?>

            </table>
        </div>
    </body>
</html>

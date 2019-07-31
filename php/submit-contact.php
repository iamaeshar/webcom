<?php
    if (isset($_POST['name']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['message'])) {
        extract($_POST);
        $to = "aesharmanzar@gmail.com";
        $subject = "Enquiry from Webcom E-Trade Website";
        $body = '<!DOCTYPE html>
    <html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=UTF-8" />
    </head>
    
    <body style="font-family: Arial, Helvetica, sans-serif;margin:0px;background-color: #ffffff;">
        <table style="background-color: #eeeeee;padding: 8px 16px;width: 100%;box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);">
            <tr>
                <td><img src="https://www.wampinfotech.com/images/wamp-round-logo.png" height="50px" alt="WAMP InfoTech" /></td>
                <td style="line-height: 50px;vertical-align: top; margin:0px; font-size: 32px; font-weight: 500;">Enquiry
                    from Webcom E-Trade Web</td>
            </tr>
        </table>
        <table style="padding: 8px 16px;width: 100%;font-weight: 500;" cellspacing="10">
            <tr>
                <td style="color: #3d85c6;width: 30%">Name:</td>
                <td style="width: 70%;">'.$name.'</td>
            </tr>
            <tr>
                <td style="color: #3d85c6;width: 30%">Email:</td>
                <td style="width: 70%;">'.$email.'</td>
            </tr>
            <tr>
                <td style="color: #3d85c6;width: 30%">Phone:</td>
                <td style="width: 70%;">'.$phone.'</td>
            </tr>
            <tr>
                <td style="color: #3d85c6;width: 30%">Message:</td>
                <td style="width: 70%;">'.$message.'</td>
            </tr>
        </table>
        <table style="background-color: #3d85c6;padding: 8px 16px;width: 100%;color: #ffffff;">
            <tr>
                <td style="line-height: 50px;vertical-align: top; margin:0px; font-size: 24px; font-weight: 500;"><a href="http://webcometrade.com/"
                        style="color: #ffffff;text-decoration:none">Webcom E-Trade.</a></td>
            </tr>
        </table>
    </body>
    
    </html>';

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    if (mail($to, $subject, $body, $headers)) {
        $data = array("message"=>"Thank you! We will contact you soon.", "status"=>"success");
    } else {
        $data = array("message"=>"Email seems to be wrong, Try again.", "status"=>"error");
    }
}
echo json_encode($data);

?>
<?php
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$msg1=$name.', '.$email.', '.$phone.', '.$message;
$msg2=substr($msg1,0,160);
$url='http://staticking.org/index.php/smsapi/httpapi/?uname=mayra&password=rohit@5286&sender=SSICAB&receiver=8979000811&route=TA&msgtype=1&sms='.urlencode($msg2);
$url='http://staticking.org/index.php/smsapi/httpapi/?uname=mayra&password=rohit@5286&sender=SSICAB&receiver=9720554488&route=TA&msgtype=1&sms='.urlencode($msg2);
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$contents = curl_exec($ch);
//
$msg='We received your message, we like to thank you for enquiry.If your enquiry is urgent, then please use mobile No. +91-8979000811, 9359901144.
https://www.ssicables.com';
$url1='http://staticking.org/index.php/smsapi/httpapi/?uname=mayra&password=rohit@5286&sender=SSICAB&receiver='.$phone.'&route=TA&msgtype=1&sms='.urlencode($msg);
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$contents = curl_exec($ch);
//
$to = 'inf@ssicables.com';
$subject = "Enquiry";
$message ='<html>

<head>

  <title>Enquiry </title>

</head>

<body>  

  <table width="500" border="1" style="border:1px solid #CCCCCC;-webkit-border-radius:5px;-moz-border-radius:5px;-ms-border-radius:5px;-o-border-radius:5px;border-radius:5px; border-collapse:collapse;" >
  <tr style="background:#f5f5f5">

    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Name</td>

    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$name.'</td>

  </tr>

    <tr style="background:#f5f5f5">

    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">E-mail</td>

    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$email.'</td>

  </tr>

    <tr style="background:#f5f5f5">

    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Number</td>

    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$phone.'</td>

  </tr>

    <tr style="background:#f5f5f5">

    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Requirement</td>

    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$message.'</td>

  </tr>
</table>

</body>

</html>';

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// Additional headers
$headers .= 'From: SSI Cables<info@ssicables.com>' . "\r\n";

// Send email
//if(mail($to,$subject,$htmlContent,$headers)):
  // echo $successMsg = 'Email has sent successfully.';
//else:
  // echo $errorMsg = 'Email sending fail.';
//endif;
mail($to, $subject, $message, $headers);
echo"<script>
window.location.href='thankyou.php?msg=Your Query is Sucessfully ';
</script>";
?>
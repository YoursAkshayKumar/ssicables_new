<?php
$name=$_REQUEST['name'];
$mail=$_REQUEST['mail'];
$number=$_REQUEST['number'];
$address=$_REQUEST['address'];
$applied=$_REQUEST['applied'];
$salary=$_REQUEST['salary'];
$experience=$_REQUEST['experience'];
$location=$_REQUEST['location'];
$experiencectc=$_REQUEST['experiencectc'];
$phone=$_REQUEST['phone'];

$to  = 'inf@ssicables.com'; 
//$ccmail='manishkumar95360@gmail.com';
$subject = 'Contact Form';
$req='Contact Form';
$message ='<html>
<head>
  <title>Contact Form</title>
</head>
<body>  
  <table width="500" border="1" style="border:1px solid #CCCCCC;-webkit-border-radius:5px;-moz-border-radius:5px;-ms-border-radius:5px;-o-border-radius:5px;border-radius:5px; border-collapse:collapse;" >
 
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Name</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$name.'</td>
  </tr>
  
  
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">E-mail</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$mail.'</td>
  </tr>
  
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Number</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$number.'</td>
  </tr>
   
   
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Address</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$address.'</td>
  </tr>
  
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Applied</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$applied.'</td>
  </tr>
  
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Salary</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$salary.'</td>
  </tr>
  
  
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Experience</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$experience.'</td>
  </tr>
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Location</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$location.'</td>
  </tr>
  
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">experiencectc</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$experiencectc.'</td>
  </tr>
  
    <tr style="background:#f5f5f5">
    <td style="border-bottom:0px dotted black;padding:5px; color:#0066FF; font-weight:600; font-size:13px;" width="123">Phone</td>
    <td style="border-bottom:0px dotted black;padding:5px;" width="361">'.$phone.'</td>
  </tr>
   
</table>
</body>
</html>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers  .= "From: $req <info@ssicables.com>" . "\r\n";
mail($to, $subject, $message, $headers);
echo"<script>
window.location.href='thankyou1.php?msg=Your Query is Sucessfully ';
</script>";
?>

<?php
$email = $_POST['con_email'];
$name = $_POST['con_name'];
$phone = $_POST['con_phone'];
$mess = $_POST['con_message'];

if(isset($_POST['con_company']))
{
    $con_company = $_POST['con_company'];
}
else
{
    $con_company = '';
}




$to = 'themewar@gmail.com';
$subject = 'Stellar User Query';

$message = '<strong>Name : </strong>'.$name.'<br/><br/>';
$message = '<strong>Phone : </strong>'.$phone.'<br/><br/>';
if($con_company != ''):
$message = '<strong>Company : </strong>'.$con_company.'<br/><br/>';
endif;
$message .= $mess.'<br/>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$message,$headers);
echo 1;
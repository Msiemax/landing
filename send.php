<?php

$to = 'misiek_141@onet.eu';
$imie = $_POST['imie'];
$mail = $_POST['mail'];
$subject = 'Wiadomosc od '. $imie . ' (' . $mail . ') ';
$wiadomosc =  $_POST['mesg'];
$headers = "From: misiek_141@onet.eu\r\nReply-to: $mail\r\n";
$headers .= "Content-Type: text/html; charset=utg-8\r\n";


$wyslij=mail($to, $subject, $wiadomosc, $headers);



if($wyslij) {
echo"Wiadomość została wysłana";
} else {
echo"Wystąpił błąd";
}

?>
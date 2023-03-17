<?php

//PHP code for sending message (Contact Form)

//A TESTER LORS DE LA MISE EN LIGNE DU SITE (PORT 25 WAMP BLOQUE)
$name = $_POST['name'];
$mail = $_POST['mail'];
$mess = htmlspecialchars($_POST['message']);
$dateFr = date("d/m/Y");
$hourFr = date("H:m:s");

$to = 'mehdialapro@gmail.com';
$subject = 'Passion-Plante - from '.$name;
$message = 'FROM : '.$name.'<br>Email : '.$mail.'<br>Message : '.$mess.'<br>Envoyé le '.$dateFr.' à '.$hourFr;


mail($to,$subject,$message);

$title = "Mail envoyé !";
$content = "";

require('../../templates/simpleLayout.php');

<?php
$name = $_POST['nome'];
$cognome = $_POST['cognome'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$messaggio = $_POST['messaggio'];
$url = $_POST['url'];



$delay = "4";
$url = "https://edo-01.github.io/E.O-Web-Site/"

$testo = "Nome: " . $nome . "\n"
       . "Cognome: " . $cognome . "\n"
       . "Telefono: " . $telefono . "\n"
       . "Email: " . $email . "\n"
       . "Messaggio: " . $messaggio . "\n"

mail('edoardo.ottolenghi@gmail.com', 'Mail da Edoardo Ottolenghi', $testo);

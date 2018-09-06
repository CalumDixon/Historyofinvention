<?php 

if (isset)($_POST ['submit']) {
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $event = $_POST['event'];
    $message = $_POST['message'];
    $mailfrom = $_POST['mail'];
}

$mailto= = "calumdixon1@googlemail.com";
$headers = "From: ".$mailfrom;
$txt = "You have recieved an e-mail from" .$firstname, $surname ".\nzn" .$message;

mail($mailto, $event, $txt, $headers);
header("location: index.php?mailsend");
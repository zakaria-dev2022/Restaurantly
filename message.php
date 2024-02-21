<?php
include_once("client.class.php");
include_once("message.class.php");
extract($_POST);
// print_r($_POST).'<br>';
// echo $email_commentaire.'<br>';
// echo $type_message.'<br>';
// echo $message_commentaire.'<br>';
// $client=Client::selectClient($email_commentaire);
// print_r( $client[0]['id']);
// exit();
$client=Client::selectClient($email_commentaire);
if (!empty($client)) {
$message1=new Message($type_message,$message_commentaire,$client[0]['id']);
$message1->ajouter_message();
$nom=$client[0]['nom'];
$prenom=$client[0]['prenom'];
Utils::location("index2.php?resultas=message_reussie&nom=".$nom."&prenom=".$prenom);
// echo "reussie";
}else{
    // echo "Se client n'existe pas";
    Utils::location("index2.php?resultas=message_erreur"); 
    
}

?>
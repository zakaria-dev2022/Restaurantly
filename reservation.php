<?php
include_once("reservation.class.php");
include_once("client.class.php");

extract($_POST);
$client=Client::selectClient($email);
if (!empty($client)) {
$reservation=new Reservation($num_personne,$num_table,$type_reservation,$date,$message,$client[0]['id']);
$reservation->ajouter_reservation();
$nom=$client[0]['nom'];
$prenom=$client[0]['prenom'];
// Utils::location("index2.php?resultas=reussie"); 
Utils::location("index2.php?resultas=reussie&nom=".$nom."&prenom=".$prenom);
// echo "reussie";
}else{
    // echo "Se client n'existe pas";
    Utils::location("index2.php?resultas=erreur"); 
    
}

?>
<?php
include_once("reservation.class.php");
include_once("client.class.php");
session_start( );
extract($_POST);
// $client=Client::selectClient();
if (!empty($_SESSION['email'])) {
$reservation=new Reservation($num_personne,$num_table,$type_reservation,$date,$message,$_SESSION['id']);
$reservation->ajouter_reservation();
Utils::location("index2.php?resultas=reussie");
}else{
    Utils::location("index2.php?resultas=erreur"); 
}

?>
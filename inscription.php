<?php
include_once("client.class.php");
extract($_POST);
if ($nom !=""&& $prenom!=""&& $cin!=""&& $tel!=""&& $email!=""&&$mp!=""&& $cmp!="" && $mp===$cmp) {
    $newclient=new  client($nom,$prenom,$cin,$tel,$email,$mp);
    $newclient->ajouter_client();
    Utils::location("index.php?inscription=ok");
}else
Utils::location("index.php");




?>
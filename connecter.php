<?php
include_once ("client.class.php");
extract($_POST);
$connecter=Client::selectClient($login);
    if (!empty($connecter)) {
         foreach ($connecter as $v) {
        if ($v["mot_de_passe"]==$password) {
            Utils::location("index2.php");
        }else {
            Utils::location("index.php");
        }
        
    }
    } else {
        Utils::location("index.php");
    }
    







?>
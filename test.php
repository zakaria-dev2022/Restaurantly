<?php
include_once("utils.class.php");
$logo= Utils::select_logo();
print_r($logo['photo'])."<br>";

// print_r ($commentaire[0]['id']);
?>

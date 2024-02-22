<?php
// Script pour ajouter au panier (ajouter-au-panier.php)

    $productId = $_POST['productId'];
    // print_r($productId);
    // Logique pour ajouter $productId au panier
    // Cette partie dépendra de votre système de gestion de panier et de votre base de données
    // Vous devrez insérer l'article dans la table de panier ou utiliser une session pour stocker les articles du panier
    // Par exemple :
    // $_SESSION['cart'][] = $productId;
    echo "<h1>".$productId."</h1>"; // Envoyer une réponse indiquant que l'opération a réussi

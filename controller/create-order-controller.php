<?php

// je définis une variable de départ/par défaut $message avec une valeur vide 

$message = "";

// si l'utilisateur entre une valeur dans des champs quantity et product 
// on récupère donc ces valeurs par la méthode post 
if (
    array_key_exists("quantity", $_POST) &&
    array_key_exists("product", $_POST)) 
{
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];

    
    // le message ci dessous apparaîtra alors en fonction de ce qu'il a choisi

    $message = "Votre commande contient : " . $quantity . " " . $product;
};


//Je fais appel à la page view (create-order) 
// cele permet de faire appel (si besoin)à cette page plusieurs fois sans réécrire tous les codes html de cette dernière
require_once ("../view/create-order-view.php");

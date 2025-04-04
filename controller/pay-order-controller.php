<?php

//On inclut le fichier order-repository qui contient notre fonction findOrderByUser
require_once("../model/order-repository.php");

//Permet de démarrer une session ou reprendre une déjà existante
//stockage de données/infos de l'utilisateur (ici les données du panier)
session_start();

//on récupère donc ces données et les stocke dans $orderByUser
$orderByUser = findOrderByUser();

//On vérifie si la requête est bien une methode POST (=càd l'utilisateur a cliqué sur payer)
// Si oui, le status de la commande passe de "CART" à "PAID"
//Ensuite la fonction savedOrder est appelée pour enregistrer la commande dans la base de données

if ($_SERVER['request_method'] === "post"){
    $orderByUser['status'] = "PAID";
    savedOrder($orderByUser);

};

require_once("../view/pay-order-view.php");


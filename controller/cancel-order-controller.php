<?php

//Permet de démarrer une session ou reprendre une déjà existante
//stockage de données/infos de l'utilisateur (ici les données du panier)
session_start();

//On inclut le fichier order-repository qui contient notre fonction findOrderByUser
require_once("../model/order-repository.php");

//on récupère donc ces données et les stocke dans $orderByUser
$orderByUser = findOrderByUser();

//On vérifie si la requête est bien une methode POST (=càd l'utilisateur a cliqué sur annuler)
// Si oui, le status de la commande passe de "CART" à "CANCELLED" si la commande n'est pas déjà payée
//Ensuite la fonction savedOrder est appelée pour enregistrer la commande dans la base de données

$message="";

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    if ($orderByUser['status'] === "CART"){
        $orderByUser['status'] = "CANCELLED";
        savedOrder($orderByUser);
    }
  else{
    $message="Vous ne pouvez pas annuler la commande déjà payée";
  }
}

require_once("../view/cancel-order-view.php");


<?php

//Permet de démarrer une session ou reprendre une déjà existante
//stockage de données/infos de l'utilisateur (ici les données du panier)
session_start();

//On inclut le fichier order-repository qui contient notre fonction findOrderByUser
require_once("../model/order-repository.php");

//on récupère donc ces données et les stocke dans $orderByUser
$orderByUser = findOrderByUser();

//On vérifie si la requête est bien une methode POST (=càd l'utilisateur a cliqué sur annuler)
// Si oui, le status de la commande passe de "PAID" à "SHIPPED" si la commande n'est pas déjà payée
//Ensuite la fonction savedOrder est appelée pour enregistrer la commande dans la base de données

$message="";

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    if ($orderByUser['status'] === "PAID"){
        $orderByUser['status'] = "SHIPPED";
        savedOrder($orderByUser);
    }
    else if ($orderByUser['status'] === "SHIPPED"){
        $orderByUser['status'] = "SHIPPED";
        savedOrder($orderByUser);
        $message="Votre commande est déjà en route!";
    }
    else{
      $message="Vous n'avez pas de commande à expédier. Veuillez vérifier si la commande a bien été payée";
  }
}

require_once("../view/ship-order-view.php");


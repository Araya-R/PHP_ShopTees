<?php

//On inclut le fichier order-repository qui contient notre fonction findOrderByUser
require_once("../model/order-repository.php");

//Permet de démarrer une session ou reprendre une déjà existante
//stockage de données/infos de l'utilisateur (ici les données du panier)
session_start();

//on récupère donc ces données et les stocke dans $orderByUser
$orderByUser = findOrderByUser();

require_once("../view/pay-order-view.php");


<?php
// on fait appel à la page repository pour pouvoir récuperer les données (liste des produits)
require_once("../model/product-repository.php");
//on fait appel à la page order.repository
require_once("../model/order-repository.php");

// démarrer une session ou reprendre une session existante.
// permet de stocker des infos spécifiques à un utilisateur sur le serveur
//utile pour gérer l'authentification, les paniers d'achat, ...

//Démarre la session
session_start();

//on vérifie si les clés quantity et product existent dans le tableau $_post (récupérer via le formulaire)
//si elles existent, on appelle la fct createOrder et savedOrder pour enregistrer dans la session
if (
    array_key_exists("quantity", $_POST) &&
    array_key_exists("product", $_POST)) 
{
      $order = createOrder($_POST ['product'], $_POST['quantity']);
    savedOrder($order);
}
// on appelle la fct findOrderByUser pour récupérer la commande qui a été sauvegardée dans la session
$orderByUser = findOrderByUser();


require_once ("../view/create-order-view.php");

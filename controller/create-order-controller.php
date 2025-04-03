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

$message="";
//on vérifie si les clés quantity et product existent dans le tableau $_post (récupérer via le formulaire)
//si elles existent, on appelle la fct createOrder et savedOrder pour enregistrer dans la session
if (
    array_key_exists("quantity", $_POST) &&
    array_key_exists("product", $_POST)) 
{

//Le bloc try-catch = intercepter les erreurs et afficher un message d'erreur 
//si une exception est lancée dans la fonction createOrder
    try{
        // appel à la fonction avec les données soumises via le formulaire
        $order = createOrder($_POST ['product'], $_POST['quantity']);

        //Si la commande est créee avec succès, l'enregistrer dans la session
        savedOrder($order);
        $message = "Votre commande a été créee avec succès";

    }catch(Exception $e) {

        //Si une exception est lancée (si la quantité est invalide)
        //afficher le message d'erreur
        $message=$e->getMessage();
    } 
};

// on appelle la fct findOrderByUser pour récupérer la commande qui a été sauvegardée dans la session
$orderByUser = findOrderByUser();


require_once ("../view/create-order-view.php");

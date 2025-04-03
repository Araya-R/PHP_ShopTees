<?php

//cette fonction cherche dans la session si une clé "order" existe (=si une commande a été enregistée par l'utilisateur)
function findOrderByUser(){
    if (array_key_exists("order", $_SESSION)){
        return $_SESSION["order"];
    }else{
        return null;
    }
}
// fct permettant de créer une commande (prend 2 paramètres product et quantity)
function createOrder($product, $quantity){
    $order=[
        "product" => $product,
        "quantity" => $quantity
    ];
    return $order;
}

//fct permet de sauvegarder les commandes
//prend un paramètre $order = commande
// fct vérifie s'il y a une commande, elle sera sauvegardée dans $_session
function savedOrder ($order){
    $_SESSION["order"]= $order;
}

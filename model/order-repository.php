<?php

//cette fonction cherche dans la session si une clé "order" existe (=si une commande a été enregistée par l'utilisateur)
function findOrderByUser(){
    if (array_key_exists("order", $_SESSION)){
        return $_SESSION["order"];
    }else{
        return null;
    }
}
// fct permettant de créer une commande (prend 2 paramètres $product et $quantity)
function createOrder($product, $quantity){
    //vérification que la quantité est un nombre positif qui ne dépasse pas 4 
    if($quantity < 0 || $quantity > 4){
        return false; 
        //retouner false si la quantité est invalide
    }else{
        // si la quantité est validen créer la commande
        $order=[
            "product" => $product,
            "quantity" => $quantity
        ];
        return $order; 
        //retouner l'ordre créé 
    }
};

//fct permettant de sauvegarder les commandes
//prend un paramètre $order ()= commande)
// fct vérifie s'il y a une commande, elle sera sauvegardée dans $_session
function savedOrder ($order){
    $_SESSION["order"]= $order;
}

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
    
// LA GESTION DES EXCEPTIONS 
    // Véfirier que la quantité est positive
    if($quantity < 0){
       throw new Exception("Interdiction de mettre une quantité inférieure à 0");
    
    //Vérifier que la quantité ne dépasse pas 4 
    }else if ($quantity > 4){
        throw new Exception("Interdicton de mettre la quantité supérieur à 4");
    
    //Création de la commande avec la date actuelle 
    }else{
        $order=[
            "product" => $product,
            "quantity" => $quantity,
            "createdAt" => new DateTime()
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

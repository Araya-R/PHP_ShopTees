<?php
// class order = un modèle représentant une commande passée par un client
class order {
    // ce sont les propriétés/attributs de l'objet
    // Elle sont publiques = accessibles de l'extérieur

    // variable product = le nuom du produit commandé
    public $product;
    // variable quantity = le nbr d'unité 
    public $quantity;
    // variable createdAt = la date de la commande 
    public $createdAt;
    // variable status = l'état de la commande "CART", "PAID", "SHIPPED"
    public $status;
};

// création de l'ojet $order à partir de la class order
//en lui attribuant des valeurs
$order = new order;

//On donne à l'objet $order une valeur pour sa propriété $product ici "Teeshirt Mario" 
$order->product = "Teeshirt Mario";
//on donne une valeur à la propriété $quantity 2
$order->quantity= 2;
// on lui donne une date actuelle
$order->createdAt = new DateTime();
// ici un statut CART = commande est dans un panier
$order->status = "CART";


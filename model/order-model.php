<?php
// class order = un modèle représentant une commande passée par un client
class order {
    // ce sont les propriétés/attributs de l'objet

    // variable product = le nuom du produit commandé
    public $product;
    // variable quantity = le nbr d'unité 
    public $quantity;
    // variable createdAt = la date de la commande 
    public $createdAt;
    // variable status = l'état de la commande "CART", "PAID", "SHIPPED"
    public $status;
};
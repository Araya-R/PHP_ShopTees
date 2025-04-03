<?php
require_once("../view/partial/_header.php")
?>

<main>

<p><?php echo $message; ?></p>

<?php if ($orderByUser) {?>
    <p class="message">Vous avez une commande en attente : <?php echo $orderByUser['product']; ?> <?php echo $orderByUser['quantity']; ?>
<?php } ?>

    <h2>Création de commande</h2>
    <form method="post">

        <label for="">Quantité
            <input type="number" name="quantity">
        </label>

        <!-- on utilise  donc une boucle pour afficher les produits dans le tableau du Repository -->
        <select name="product">
            <?php foreach ($products as $product) { ?>
                <option value="<?php echo $product; ?>"><?php echo $product; ?></option>
            <?php } ?>
        </select>

        <button type="submit">Valider</button>

    </form>
</main>

</body>

</html>
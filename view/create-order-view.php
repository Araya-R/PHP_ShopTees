<?php 
require_once("../view/partial/_header.php")
?>

    <main>

    <!-- On vérifie si une commande est présente dans la session 
     = si la key order existe dans la variable $_SESSION -->
    <?php if (array_key_exists("order", $_SESSION)) { ?>
        <!-- afficher le message  -->
		<p class="message">Vous avez une commande en attente : 
        <!-- affiche la quantité et le nom de produit-->
        <?php echo $_SESSION["order"]["quantity"]; ?> : 
        <?php echo $_SESSION["order"]["product"]; ?></p>
	<?php } ?>

        <!-- <p class="message"><?php echo $message; ?> </p> -->

        <h2>Création de commande</h2>
        <form method="post">

            <label for="">Quantité
                <input type="number" name="quantity">
            </label>

            <select name="product">
                <option value="" disabled selected>Produits</option>
                <option value="TeeshirtMario">TeeShirt Mario</option>
                <option value="TeeshirtHelloKitty">TeeShirt Hello Kitty</option>
                <option value="TeeshirtGTA">TeeShirt GTA</option>
            </select>

            <button type="submit">Valider</button>

        </form>
    </main>

</body>

</html>
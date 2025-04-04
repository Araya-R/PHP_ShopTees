<?php

use Vtiful\Kernel\Format;
require_once("../view/partial/_header.php")
?>

<main>
    <h2>Annuler votre commande</h2>


        <p><?php echo $message; ?></p>

		<?php if ($orderByUser) {?>
			<p class="message">Vous avez une commande : <?php echo $orderByUser['quantity']; ?> x <?php echo $orderByUser['product']; ?>
			<p class="message">Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
            <p class="message">Votre commande est en status : <?php echo $orderByUser['status']; ?> </p>

            <form method="post">
            <button type="submit">Annuler la commande</button>
            </form>

		<?php } else {?>
            <p>Vous n'avez pas de commande à annuler</p>
            <?php }?>

    </form>
</main>

</body>

</html>
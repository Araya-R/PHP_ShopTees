<?php

use Vtiful\Kernel\Format;
require_once("../view/partial/_header.php")
?>

<main>
    <h2>Expédition de la commande</h2>


        <p><?php echo $message; ?></p>

		<?php if ($orderByUser) {?>
			<p class="message">Vous avez une commande : <?php echo $orderByUser['quantity']; ?> x <?php echo $orderByUser['product']; ?>
			<p class="message">Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
            <p class="message">Votre commande est en status : <?php echo $orderByUser['status']; ?> </p>

            <form method="post">
            <button type="submit">Expédier la commande</button>
            </form>

		<?php } else {?>
            <p>Vous n'avez pas de commande à expédier</p>
            <?php }?>

    </form>
</main>

</body>

</html>
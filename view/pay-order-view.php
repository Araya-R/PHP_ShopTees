<?php

use Vtiful\Kernel\Format;
require_once("../view/partial/_header.php")
?>

<main>
    <h2>Payez votre commande</h2>

		<?php if ($orderByUser) {?>
			<p class="message">Vous avez une commande en attente : <?php echo $orderByUser['quantity']; ?> x <?php echo $orderByUser['product']; ?>
			<p class="message">Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
            <p class="message">Votre commande est en status : <?php echo $orderByUser['status']; ?> </p>

            <button>Payez</button>
		<?php } else {?>
            <p>Vous n'avez pas de commande à payer</p>
            <?php }?>

    </form>
</main>

</body>

</html>
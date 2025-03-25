<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-Tees</title>
</head>

<body>

    <header>
        <h2>Créer les Tees</h2>
    </header>

    <main>

        <h2><?php echo $message; ?> </h2>

        
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
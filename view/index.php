<?php
//inclusione con direttiva dir del file Prodotto contenenti le classi
require_once __DIR__ . '/../controller/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--/FONT AWESOME-->
</head>
<body>
    <header>
        <h1>PET SHOP</h1>
    </header>
    <main>
        <article>
            <h2><?php echo $prodotto1->nomeObj ?></h2>
            <h3><?php echo $prodotto1->madeIn ?></h3>
            <h3><?php echo $prodotto1->peso ?></h3>
            <h3><?php echo $prodotto1->categoria ?></h3>
        </article>
    </main>
    
</body>
</html>
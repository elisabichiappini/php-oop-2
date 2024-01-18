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
    <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--/Font Awesome CDN-->
    <!--Bootstrap CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--Bootstrap CDN-->
</head>
<body class="bg-dark text-white">
    <!--Intestazione Pet Shop-->
    <header class="container text-center text-uppercase">
        <h1 class="p-4">Pet shop</h1>
    </header>
    <!--/Intestazione Pet Shop-->
    <!--Corpo progetto-->
    <main class="container">
        <!--Contenitore-->
        <div class="row">
            <?php foreach($objsArray as $obj) :?>
                <div class="col-4">
                <!--Card-->
                    <div class="card width-100">
                        <img src="<?php echo $obj->get_img(); ?>" class="card-img-top" alt="<?php echo $obj->get_nome();?>">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $obj->get_nome(); ?></h2>
                            <h3 class="card-text"><?php echo $obj->tipo_prodotto?></h3>
                            <h4 class="card-text"><?php echo $obj->get_brand(); ?> - <?php echo $obj->get_made_in(); ?></h4>
                            <h6 class="card-text"><?php echo strtoupper($obj->get_categoria()->get_nomeCategoria())?> <?php echo ($obj->get_categoria()->get_icona())?></h6>
                            <p class="card-text"><?php echo $obj->get_prezzo(); ?> Euro</p>
                            <a href="#" class="btn btn-primary">Aggiungi al carrello <i class="fa-sharp fa-solid fa-basket-shopping"></i></a>
                        </div>
                    </div>
                    <!--/Card-->
                </div>
            <?php endforeach ?>
        </div>
        <!--/Contenitore-->
    </main>
    <!--Corpo progetto-->
</body>
</html>
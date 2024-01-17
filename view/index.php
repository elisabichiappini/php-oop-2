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
<body>
    <!--Intestazione Pet Shop-->
    <header>
        <h1>PET SHOP</h1>
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
                        <img src="<?php echo $obj->get_img();?>" class="card-img-top" alt="<?php echo $obj->get_nome();?>">
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $obj->get_nome()?></h2>
                            <p class="card-text"><?php echo $obj->get_brand() ?></p>
                            <h6 class="card-text"><?php echo strtoupper($obj->get_categoria()->get_nomeCategoria())?></h6>
                            <p class="card-text"><?php echo $obj->get_prezzo() ?></p>
                            <a href="#" class="btn btn-primary">Buy</a>
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
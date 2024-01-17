<?php
//inclusione files models
require_once __DIR__ . '/../models/Categoria.php';
require_once __DIR__ . '/../models/Prodotto.php';
require_once __DIR__ . '/../models/Cibo.php';
require_once __DIR__ . '/../models/Cuccia.php';
require_once __DIR__ . '/../models/Gioco.php';

//istanzio classe Categoria
$cani = new Categoria ('cani', '<i class="fa-solid fa-dog"></i>');
$gatti = new Categoria ('gatti', '<i class="fa-solid fa-cat"></i>');

//istanzio classe Prodotto
$product1 = new Prodotto (12, 'x', 120, $cani);

//istazio classe Cibo
$cibo_cuccioli = new Cibo (15, 'Trainer Puppy Salmon', 120, $cani);

//istanzio classe Gioco
$pallina = new Gioco ( 200,'Palla per dentini', 10, $gatti);

//istanzio classe Cuccia
$cuccia_collie = new Cuccia (44, 'Cuccia Giardino Collie', 120, $cani);


$prodottiArray = [
    $cibo_cuccioli,
    $pallina,
    $cuccia_collie,
];

echo "<pre>";
var_dump($prodottiArray);
echo "</pre>";
?>
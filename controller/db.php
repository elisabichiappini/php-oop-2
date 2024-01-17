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
$product1 = new Prodotto (12, 'x', 120, "xx.jpg", $cani);

//istazio classe Cibo
$cibo_cuccioli = new Cibo (15, 'Trainer Puppy Salmon', "https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/800/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg", 120, $cani);

//istanzio classe Gioco
$pallina = new Gioco ( 200,'Palla per dentini',  "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/spiky/ball/large/palla/in/tpr/6/800/62906_PLA_TPR_Spiky_Ball_large_12_FG__53_6.jpg", 10, $gatti);

//istanzio classe Cuccia
$cuccia_collie = new Cuccia (44, 'Cuccia Giardino Collie', "https://shop-cdn-m.mediazs.com/bilder/letto/basic/1/800/104017_104120_fg_8187_1.jpg", 120, $cani);


$objsArray = [
    $cibo_cuccioli,
    $pallina,
    $cuccia_collie,
];

echo "<pre>";
var_dump($objsArray);
echo "</pre>";
?>
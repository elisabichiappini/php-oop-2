<?php
//inclusione files models
require_once __DIR__ . '/../models/Categoria.php';
require_once __DIR__ . '/../models/Prodotto.php';
require_once __DIR__ . '/../models/Cibo.php';
require_once __DIR__ . '/../models/Cuccia.php';
require_once __DIR__ . '/../models/Gioco.php';

//istanzio classe Categoria
$cani = new Categoria ('cani', '<i class="fa-solid fa-dog ms-2"></i>');
$gatti = new Categoria ('gatti', '<i class="fa-solid fa-cat ms-2"></i>');

//istanzio classe Prodotto
$product1 = new Prodotto (12, 'x', 120, "xy.jpg", $cani);

//istazio classe Cibo
$cibo_cuccioli = new Cibo (15, 'Trainer Health Puppy', "https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/800/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg", 120, $cani);
$cibo_cuccioli->set_brand('Trainer');

//istanzio classe Gioco
$pallina = new Gioco ( 200,'Palla per dentini', "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/spiky/ball/large/palla/in/tpr/6/800/62906_PLA_TPR_Spiky_Ball_large_12_FG__53_6.jpg", 10, $gatti);
$pallina->set_brand('Cat World');
//istanzio classe Cuccia
$cuccia_collie = new Cuccia (44, 'Cuccia Giardino Collie', "https://shop-cdn-m.mediazs.com/bilder/letto/basic/1/800/104017_104120_fg_8187_1.jpg", 120, $cani);
$cuccia_collie->set_brand('');

$objsArray = [
    $cibo_cuccioli,
    $pallina,
    $cuccia_collie,
];


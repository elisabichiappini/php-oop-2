<?php
//inclusione files models
require_once __DIR__ . '/../models/Prodotto.php';
require_once __DIR__ . '/../models/ProdottoCategoria.php';
require_once __DIR__ . '/../models/ProdottoCategoriaModello.php';

//istanzio prodotti: cibo, cuccia, gioco
$prodotto1 = new Obj('Salmone health Monge', 70, 'Italy', 50, 'Cane', 'Salmone Health Monge');
$prodotto2 = new Obj('Arcaplanet', 100, 'Great Bretan', 20, 'Gatto','Care Cuccia Arcaplanet');
$prodotto3 = new Obj('Pet Toys', 30 , 'France', 1, 'Gatto', 'Palla Pet Gioco');

echo "<pre>";
var_dump($prodotto1, $prodotto2, $prodotto3);
echo "</pre>";

?>
<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../trait/Colore.php';
class Cuccia extends Prodotto {
    //trait
    use Colore;
    //attributi
    private $materiale;
    public $tipo_prodotto = "Cuccia";

}
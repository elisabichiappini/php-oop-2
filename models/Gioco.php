<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../trait/Colore.php';
require_once __DIR__ . '/../trait/MadeIn.php';
class Gioco extends Prodotto {
    //trait
    use Colore;
    use MadeIn;
    //attributi
    private $materiale;
    public $tipo_prodotto = "Gioco";

}
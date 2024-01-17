<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../trait/Colore.php';
class Cuccia extends Prodotto {
    //trait
    use Colore;
    //attributi
    private $materiale;
    private $colore;
    public $tipo_prodotto = "Cuccia";

    // //funzioni setter e getter
    // //COLORE    
    // public function set_colore($_colore) {
    //     $this->colore = $_colore;
    // }
    // public function get_colore($_colore) {
    //     return $this->colore;
    // }
}
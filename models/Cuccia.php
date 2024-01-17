<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
class Cuccia extends Prodotto {
    private $materiale;
    private $colore;

    //funzioni setter e getter
    //COLORE    
    public function set_colore($_colore) {
        $this->colore = $_colore;
    }
    public function get_colore($_colore) {
        return $this->colore;
    }
}
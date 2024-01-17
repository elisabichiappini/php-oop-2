<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
class Cibo extends Prodotto {
    private $ingredienti;
    private $scadenza;
    private $peso;

    // funzioni setter e getter
    //SCADENZA
    public function set_scadenza($_scadenza) {
        $this->scadenza = $_scadenza;
    }
    public function get_scadenza() {
        return $this->scadenza;
    }
}
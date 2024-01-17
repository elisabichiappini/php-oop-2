<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/../trait/Colore.php';
class Gioco extends Prodotto {
    //trait
    use Colore;
    //attributi
    private $materiale;
    private $made_in;
    public $tipo_prodotto = "Gioco";
    
    //funzioni setter e getter
    //MADE IN    
    public function set_made_in($_made_in) {
        $this->made_in = $_made_in;
    }
    public function get_made_in() {
        return $this->made_in;
    }
}
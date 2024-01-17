<?php
// inclusione classe Prodotto
require_once __DIR__ . '/Prodotto.php';
class Gioco extends Prodotto {
    private $materiale;
    private $made_in;
    
    //funzioni setter e getter
    //MADE IN    
    public function set_made_in($_made_in) {
        $this->made_in = $_made_in;
    }
    public function get_made_in() {
        return $this->made_in;
    }
}
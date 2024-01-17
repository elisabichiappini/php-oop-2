<?php
trait Colore {
    //attributi
    private $colore;

    //metodi  
    public function set_colore($_colore) {
        $this->colore = $_colore;
    }
    public function get_colore() {
        return $this->colore;
    }
}
<?php
// includo classe categoria
require_once __DIR__ . '/Categoria.php';
// classe Genitore
class Prodotto {
    //proprietà della classe
    private $id;
    private $brand;
    private $prezzo;
    private $sconto = 0;
    private $made_in;
    private $nomeCategoria;

    //construct classe genitore
    function __construct($_id, $_brand, $_prezzo, Categoria $_nomeCategoria) {
        $this->id = $_id;
        $this->brand = $_brand;
        $this->prezzo = $_prezzo;
        $this->nomeCategoria = $_nomeCategoria;
    }
    
    //funzioni setter & getter
    //ID
    //funzione per scrivere lo id
    public function set_id($_id) {
        $this->id = $_id;
    }
    //funzione per leggere lo id
    public function get_id() {
        return $this->id;
    }

    //BRAND
    //funzione per scrivere lo brand
    public function set_brand($_brand) {
        $this->brand = $_brand;
    }
    //funzione per leggere lo brand
    public function get_brand() {
        return $this->brand;
    }

    //PREZZO
    //funzione per scrivere lo prezzo
    public function set_prezzo($_prezzo) {
        $this->prezzo = $_prezzo;
    }
    //funzione per leggere lo prezzo
    public function get_prezzo() {
        return $this->prezzo;
    }

    //SCONTO
    //funzione per scrivere lo sconto
    public function set_sconto($_sconto) {
        $this->sconto = $_sconto;
    }
    //funzione per leggere lo sconto
    public function get_sconto() {
        return $this->sconto;
    }

    //MADE IN
    //funzione per scrivere lo made_in
    public function set_made_in($_made_in) {
        $this->made_in = $_made_in;
    }
    //funzione per leggere lo made_in
    public function get_made_in() {
        return $this->made_in;
    }

    //CATEGORIA
    //funzione per scrivere lo nomeCategoria
    public function set_nomeCategoria($_nomeCategoria) {
        $this->nomeCategoria = $_nomeCategoria;
    }
    //funzione per leggere lo nomeCategoria
    public function get_nomeCategoria() {
        return $this->nomeCategoria;
    }
}
?>
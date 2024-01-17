<?php

// classe Genitore
class Prodotto {
    //proprietà della classe
    private $id;
    private $brand;
    private $prezzo;
    private $sconto = 0;
    private $madeIn;
    private $peso;
    private $categoria;

    //construct classe genitore
    function __construct($_id, $_brand, $_prezzo, $_madeIn, $_peso) {
        $this->id = $_id;
        $this->brand = $_brand;
        $this->madeIn = $_madeIn;
        $this->prezzo = $_prezzo;
        $this->set_sconto($_madeIn);
        $this->peso = $_peso;
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
    //funzione per scrivere lo madeIn
    public function set_madeIn($_madeIn) {
        $this->madeIn = $_madeIn;
    }
    //funzione per leggere lo madeIn
    public function get_madeIn() {
        return $this->madeIn;
    }

    //PESO
    //funzione per scrivere lo peso
    public function set_peso($_peso) {
        $this->peso = $_peso;
    }
    //funzione per leggere lo peso
    public function get_peso() {
        return $this->peso;
    }

    //CATEGORIA
    //funzione per scrivere lo categoria
    public function set_categoria($_categoria) {
        $this->categoria = $_categoria;
    }
    //funzione per leggere lo categoria
    public function get_categoria() {
        return $this->categoria;
    }

}

?>
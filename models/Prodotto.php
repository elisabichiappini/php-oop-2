<?php

// classe Genitore
class Prodotto {
   
    public $brand;
    public $prezzo;
    public $sconto = 0;
    public $madeIn;
    public $descrizione;
    public $recensioni;
    public $peso;

    //construct genitore
    function __construct( $_brand, $_prezzo, $_madeIn, $_peso) {
        $this->brand = $_brand;
        $this->madeIn = $_madeIn;
        $this->prezzo = $_prezzo;
        $this->setSconto($_madeIn);
        $this->peso = $_peso;
    }

    //funzione per scrivere lo sconto, se fatto in Italia allora sconto 20%, altrimenti no sconto.
    public function setSconto($_madeIn) {
        if($_madeIn === 'Italy') {
            $this->sconto = 20; 
        } else {
            $this->sconto = 0;
        }
    }
    //funzione per leggere lo sconto
    public function getSconto() {
        return $this->sconto;
    }
}

?>
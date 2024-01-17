<?php

//classe Categoria estende la classe prodotto implementando alcune proprietà
class Categoria {
    private $nomeCategoria;
    private $icona;

    //construct di Categoria
    public function __construct($_nomeCategoria, $_icona) {
    $this->nomeCategoria = $_nomeCategoria;
    $this->icona = $_icona;
    }

    //NOME CATEGORIA
    //funzione scrivere categoria
    public function set_nomeCategoria ($_nomeCategoria) {
        $this->nomeCategoria = $_nomeCategoria;
    }
    //funzione leggere categoria
    public function get_nomeCategoria (){
        return $this->nomeCategoria;
    }

    //ICONA
    //funzione scrivere icona
    public function set_icona ($_icona) {
        $this->icona = $_icona;
    }
    //funzione leggere icona
    public function get_icona (){
        return $this->icona;
    }
}

?>
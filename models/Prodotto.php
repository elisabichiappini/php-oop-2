<?php
// includo classe categoria
require_once __DIR__ . '/Categoria.php';
// classe Genitore
class Prodotto {
    //trait
    use MadeIn;
    //proprietà della classe
    private $id;
    private $nome;
    private $brand;
    private $img;
    private $prezzo;
    private $sconto = 0;
    private $categoria;

    //construct classe genitore
    function __construct($_id, $_nome, $_brand, $_img, $_prezzo, Categoria $_nomeCategoria) {
        $this->id = $_id;
        $this->nome = $_nome;
        $this->brand = $_brand;
        $this->img = $_img;
        $this->prezzo = $_prezzo;
        $this->categoria = $_nomeCategoria;
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

    //NOME
    //funzione per scrivere lo nome
    public function set_nome($_nome) {
        $this->nome = $_nome;
    }
    //funzione per leggere lo nome
    public function get_nome() {
        return $this->nome;
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

    //IMG
    //funzione per scrivere lo img
    public function set_img($_img) {
        $this->img = $_img;
    }
    //funzione per leggere lo img
    public function get_img() {
        return $this->img;
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
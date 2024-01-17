<?php
//classe ProdottoCategoria figlio di Prodotto
class ProdottoCategoria extends Prodotto {
    public $categoria;

    function __construct($_brand, $_prezzo, $_madeIn,  $_peso, $_categoria) {
    parent::__construct($_brand, $_prezzo, $_madeIn, $_peso);
    $this->categoria = $_categoria;
    }
    //funzione per settare la categoria
    public function setCategoria ($_categoria) {
        $this->categoria = $_categoria;
    }
}
?>
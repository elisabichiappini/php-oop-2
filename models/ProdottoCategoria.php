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
        if(strtolower($_categoria) === 'cane') {
            $this->categoria = '<i class="fa-solid fa-shield-dog"></i>';
        } elseif (strtolower($_categoria) === 'gatto') {
            $this->categoria = '<i class="fa-solid fa-shield-cat"></i>';
        } else {
            $this->categoria = '<i class="fa-solid fa-paw"></i>';
        }
    }
}
?>
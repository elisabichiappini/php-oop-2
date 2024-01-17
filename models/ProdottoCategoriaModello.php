<?php
//classe Obj figlio di ProdottoCategoria
class Obj extends ProdottoCategoria {
    public $nomeObj;

    function __construct($_brand, $_prezzo, $_madeIn, $_peso, $_categoria, $_nomeObj){
    parent::__construct($_brand, $_prezzo, $_madeIn, $_peso, $_categoria,);
    $this->nomeObj = $_nomeObj;
    }
}
?>
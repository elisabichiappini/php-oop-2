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

//classe Obj figlio di ProdottoCategoria
class Obj extends ProdottoCategoria {
    public $nomeObj;

    function __construct($_brand, $_prezzo, $_madeIn, $_peso, $_categoria, $_nomeObj){
    parent::__construct($_brand, $_prezzo, $_madeIn, $_peso, $_categoria,);
    $this->nomeObj = $_nomeObj;
    }
}


//istanzio prodotti: cibo, cuccia, gioco
$prodotto1 = new Obj('Salmone health Monge', 70, 'Italy', 50, 'Cane', 'Salmone Health Monge');
$prodotto2 = new Obj('Arcaplanet', 100, 'Great Bretan', 20, 'Gatto','Care Cuccia Arcaplanet');
$prodotto3 = new Obj('Pet Toys', 30 , 'France', 1, 'Gatto', 'Palla Pet Gioco');

echo "<pre>";
var_dump($prodotto1, $prodotto2, $prodotto3);
echo "</pre>";

?>
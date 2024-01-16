<?php

// classe genitore
class Prodotto {
    public $nomeObj;
    public $prezzo;
    public $sconto = 0;
    public $madeIn;
    public $descrizione;
    public $recensioni;

    //construct 
    function __construct($_nomeObj, $_prezzo, $_madeIn)
    {
        $this->nomeObj = $_nomeObj;
        $this->prezzo = $_prezzo;
        $this->setSconto($_madeIn);
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

//classe figlio
class prodottoCategoria extends Prodotto {
    public $categoria;

    function __construct($_nomeObj, $_prezzo, $_madeIn, $_categoria) {
    parent::__construct($_nomeObj, $_prezzo, $_madeIn);
    $this->categoria = $_categoria;
    }
    //funzione per settare la categoria
    public function setCategoria ($_categoria) {
        $this->categoria = $_categoria;
    }
}

//istanzio prodotti: cibo, cuccia, gioco
$cibo = new Prodotto('MongePuppy', 70, 'Italy');
$cuccia = new Prodotto('Cuccia', 100, 'Germany');
$gioco = new Prodotto('Palla Pet', 30, 'France');

//istanzio prodotto in base alla categoria 
$perCane = new prodottoCategoria('MongePuppy', 70, 'Italy', 'cane');
$perGatto = new prodottoCategoria('MongePuppy', 70, 'France', 'gatto');

echo "<pre>";
var_dump($perCane, $perGatto);
echo "</pre>";

?>
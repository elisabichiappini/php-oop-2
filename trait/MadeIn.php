<?php

trait MadeIn {
    //attributi
    private $made_in;

    //metodi  
    public function set_made_in($_made_in) {
        $this->made_in = $_made_in;
    }
    public function get_made_in() {
        return $this->made_in;
    }
}
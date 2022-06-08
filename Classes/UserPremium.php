<?php

require_once __DIR__.'/User.php';

class UserPremium extends User {
    protected $sconto;
    // protected $tessera;

    function __construct($_nome, $_cognome, $_sconto) {
        parent::__construct($_nome, $_cognome);
        $this->sconto = $_sconto;
    }
    public function getSconto() {
        return $this->sconto;
    }
    public function setSconto($_sconto) {
        $this->sconto = $_sconto;
    }
}

?>
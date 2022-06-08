<?php
class User {
    protected $nome;
    protected $cognome;
    protected $email;
    protected $indirizzo;
    protected $cartaCredito;

    function __construct($_nome, $_cognome)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        // $this->email = $_email;
        // $this->indirizzo = $_indirizzo;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getCognome()
    {
        return $this->cognome;
    }
    // public function getEmail()
    // {
    //     return $this->email;
    // }
    // public function getIndirizzo()
    // {
    //     return $this->indirizzo;
    // }
    public function getCartaCredito()
    {
        return $this->cartaCredito;
    }


    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    public function setCognome($_cognome)
    {
        $this->cognome = $_cognome;
    }
    // public function setEmail($_email)
    // {
    //     $this->email = $_email;
    // }
    // public function setIndirizzo($_indirizzo)
    // {
    //     $this->indirizzo = $_indirizzo;
    // }
    public function setCartaCredito($_cartaCredito)
    {
        $this->cartaCredito = $_cartaCredito;
    }

}

?>
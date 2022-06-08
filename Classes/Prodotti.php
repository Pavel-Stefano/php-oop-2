<?php

class Prodotti {
    protected $nome;
    protected $prezzo;
    protected $categoria;

    function __construct($_nome, $_prezzo, $_categoria)
    {
        $this->nome = $_nome;
        $this->prezzo =$_prezzo;
        $this->categoria = $_categoria;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getPrezzo()
    {
        return $this->prezzo;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setNome($_nome)
    {
        $this->nome = $_nome;
    }
    public function setPrezzo($_prezzo)
    {
        $this->prezzo = $_prezzo;
    }
    public function setCategoria($_categoria)
    {
        $this->categoria = $_categoria;
    }
}

?>
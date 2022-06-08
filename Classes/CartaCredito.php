<?php
class CartaCredito {
    protected $numero;
    protected $scadenza;
    protected $pin;

    function __construct($_numero, $_scadenza, $_pin)
    {
        $this->numero = $_numero;
        $this->scadenza = $_scadenza;
        $this->pin = $_pin;
    }
    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($_numero)
    {
        $this->numero = $_numero;
    }
    
    public function getScadenza()
    {
        return $this->scadenza;
    }
    public function setScadenza($_scadenza)
    {
        $this->scadenza = $_scadenza;
    }

    public function getPin()
    {
        return $this->pin;
    }
    public function setPin($_pin)
    {
        $this->pin = $_pin;
    }

}
?>
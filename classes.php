<?php

class Celular
{
    private $marca;
    public $modelo;
    public $cor;

    public function ligar()
    {
        return 'Celular ligado';
    }

    public function tirarFoto()
    {
        return 'Foto tirada';
    }

    public function chamadaTelefonica()
    {
        return 'Chamada efetuada';
    }

    public function setMarca($marcaRecebida)
    {
        $this->marca = $marcaRecebida;
    }

    public function getMarca()
    {
        
    }
}

$celular = new Celular();

echo $celular->ligar();

$celular->setMarca = 'Motorolla';
$celular->modelo = 'motoG';
$celular->cor = 'preto';

echo $celular->getMarca;


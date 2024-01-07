<?php

require '../vendor/autoload.php';

class AgendaTelefone 
{
    public function __construct(public int $telefoneCelular, public int $telefoneFixo)
    {
    }

    public function Telefones(){
        return 'Agenda de telefone, o primeiro número é o telefone celular e o segundo é o telefone Fixo ' . $this->telefoneCelular . ' | ' . $this->telefoneFixo;
    }

}


class Ligar extends AgendaTelefone
{
    public function __construct(int $telefoneCelular, int $telefoneFixo)
    {
            parent::__construct($telefoneCelular, $telefoneFixo);
    }
    
}

$ligar = new Ligar(45991349889, 4530314040);
echo $ligar->Telefones();
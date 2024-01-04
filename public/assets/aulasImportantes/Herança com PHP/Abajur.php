<?php

namespace app\classes;

class Abajur extends Products
{
    public bool $isOn = false;

    public function execute()
    {
        return 'O meu produto tem o nome de ' . $this->name;
    } 
}
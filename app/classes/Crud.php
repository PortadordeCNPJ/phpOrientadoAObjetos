<?php

namespace app\classes;

class Crud
{
    //usando a propriedade $field dentro da função do método read
    public $field = 'field teste';
    public $table  = 'user';

    public function read() 
    {
        //É o próprio objeto, faz referência ao objeto. Com o $this pode ser chamado qual objeto e qualquer método
        var_dump($this->field);
    }

    public function delete() 
    {
        return  'TESTE DELETANDO SUA ALMA';
    }

}
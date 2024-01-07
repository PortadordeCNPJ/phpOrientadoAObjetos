<?php

namespace app\classes;

class User extends Person
{
    public function info()
    {
        //o parent, faz referencia que a função determinada junto dela, indicando que a função vem da classe pai
        //Essa função só funciona em métodos da classe pai e não funciona em um propriedade
        return parent::info();
    }
}
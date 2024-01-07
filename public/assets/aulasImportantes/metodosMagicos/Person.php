<?php

namespace app\classe;

class Person
{

    public function __construct(public string $name, public string $email)
    {
    }

    public function info()
    {
        return "Meu nome é {$this->name} e meu e-mail é {$this->email}";
    }
}
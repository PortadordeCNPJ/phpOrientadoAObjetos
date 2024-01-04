<?php

namespace app\classes;

class Person
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function info()
    {
        return "Meu nome é {$this->name} e meu e-mail é {$this->email}";
    }
}
<?php

class Login 
{
    //Comportamento da classe
    //Dentro de uma Classe nós temos Metódos(Funções da classe) e Propriedades(Váriaveis de dentro da classe)

    //A propriedade e o metodo se complementam
    public $email;
    public $password;

    public function auth()
    {
        //Esse é o método e o que ele vai fazer estará dentro destas chaves
        return 'O meu email é ' . $this->email . ' e minha senha é ' . $this->password;
    }
}
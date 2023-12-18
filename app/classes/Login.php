<?php

namespace app\classes;

class Login 
{
    //Comportamento da classe
    //Dentro de uma Classe nós temos Metódos(Funções da classe) e Propriedades(Váriaveis de dentro da classe)

    //A propriedade e o metodo se complementam
    // public string $email;
    // public string $password;

    public function auth(string $email, string $password)
    {
        //Esse é o método e o que ele vai fazer estará dentro destas chaves
        return 'O meu email é ' . $email . ' e minha senha é ' . $password;
    }
}
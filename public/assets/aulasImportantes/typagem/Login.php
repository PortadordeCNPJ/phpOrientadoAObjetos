<?php

namespace app\classes;

class Login 
{
    // Comportamento da classe
    // Dentro de uma Classe nós temos Metódos(Funções da classe) e Propriedades(Váriaveis de dentro da classe)

    // A propriedade e o metodo se complementam
    public string $email;
    public string $password;

    //Assim que é trabalhado com o typerinting instanciando o objeto dentro do método
    public function auth(Crud $crud):string | int
    {
        //Esse é o método e o que ele vai fazer estará dentro destas chaves
       return $crud->delete();
    }
}
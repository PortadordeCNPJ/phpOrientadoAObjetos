<?php 

//nome do diretório principal primeiro 'app', depois os subdiretórios 'classes' e as classes dos diretórios ex: 'Login'
use app\models\User;
use app\classes\Crud;
use app\classes\Login;

require '../vendor/autoload.php';

//Chamando a classe e transformando ela em objeto
$login = new Login;
$crud = new Crud;
$user = new User;

// echo helper();

echo $user->teste();
//desta forma são chamadas as propriedades, para assim dar um valor a elas
$login->email = 'OPAAAA@gmail.com';
$login->password = '12345'; 

// var_dump($login);

//Desta forma apenas é chamada a propriedade
// echo $login->email;

//Assim é chamado o método
// echo $login->auth();

$user = ['name' => 'Guilherme', 'email' => 'guilhermedesouzamuller@hotmail.com'];

$userObj = (object)$user;
// var_dump($userObj);



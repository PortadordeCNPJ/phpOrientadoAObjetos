<?php

require '../vendor/autoload.php';

//para descobrir erro dentro da typagem
declare(strict_types=1);


use app\classes\Crud;
use app\classes\Login;

try {
    $login = new Login;
    //tipyrinting dessa forma que é inserido um objeto dentro de um método
    echo $login->auth(new Crud);
} catch (\TypeError $te) {
    var_dump($te->getMessage());
}

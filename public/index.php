<?php 

require '../vendor/autoload.php';

use app\classes\Crud;

$crud = new Crud;

//Fluent interface, métodos encadeados
$crud->delete();


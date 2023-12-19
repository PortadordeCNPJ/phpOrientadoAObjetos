<?php

$user = ['name' => 'Guilherme', 'email' => 'guilhermedesouzamuller@hotmail.com'];

$userObj = (object)$user;

//stdClass não tem métodos, mas sim, apenas propriedades. Ela é uma classe oca, vazia.
$stdClass = new stdClass;
$stdClass->name = 'Guilherme';
$stdClass->email = 'guilhermedesouzamuller@gmail.com';

var_dump($stdClass);
var_dump($userObj);
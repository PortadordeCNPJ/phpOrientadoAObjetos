<?php

require '../vendor/autoload.php';

use app\classes\Book;
use app\classes\Abajur;


$book = new Book;
$book->name = 'First Hello World for Babies';
$book->author = 'Guilherme de Souza Muller';
$book->description = 'This book describes about how babies with 4 mounth of years, can learn programming';
$book->pages = 300;

// $abajur = new Abajur;
// $abajur->name = 'KKKK ABAJUR ';
// $abajur->description = "Her is fatKKKKK, long and turn on a litte light";
// $abajur->isOn = true;


echo json_encode($abajur);
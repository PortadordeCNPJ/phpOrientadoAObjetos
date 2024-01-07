<?php

require '../vendor/autoload.php';

use app\classes\Person;

$person = new Person("Guilhemredesouzamuller", "Gmail@gmail.com.br");

echo $person->info();




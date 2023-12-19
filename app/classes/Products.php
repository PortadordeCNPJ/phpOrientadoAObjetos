<?php

namespace app\classes;

class Products
{
    public string $name;
    public string $author;
    public string $description;
    public int $pages;
    public bool $isOn = false;

    public function info()
    {
        return 'info';
    }

}
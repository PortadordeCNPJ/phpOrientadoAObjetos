<?php

namespace app\models;

class User extends Model
{
    public string $table = 'users';

    public function teste()
    {
        return 'teste user';
    }
}
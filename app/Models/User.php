<?php

namespace App\Models;

use Pulse\Model;
use Pulse\Model\ModelField;

class User extends Model
{
    protected $table = "users";

    protected $fields = [
        'username', 'password', 'firstname', 'lastname'
    ];

    public function struct()
    {
        ModelField::New('id')->ID();
        ModelField::New('username')->String()->unique();
        ModelField::New('password')->String();
        ModelField::New('firstname')->String();
        ModelField::New('lastname')->String();
    }
}

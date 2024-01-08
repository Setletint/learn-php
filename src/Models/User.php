<?php

namespace App\Models;

class User extends Model {
    static $table = 'users';
    public $id;
    public $email;
    public $password;
}
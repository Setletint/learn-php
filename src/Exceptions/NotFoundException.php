<?php

namespace App\Exceptions;

use Exception;

class NotFoundException extends Exception {
    protected $message = "Not Found";
    protected $code = 404;
}
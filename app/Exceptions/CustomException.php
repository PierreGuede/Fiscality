<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{

    public function __construct(String $message)
    {
        $this->message = $message;
        parent::__construct();

    }

    public function error_message()
    {
        return $this->message;
    }
}

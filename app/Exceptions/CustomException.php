<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public function __construct(string $message)
    {
        $this->message = $message;
        parent::__construct();
    }

    public function error_message()
    {
        return $this->message;
    }
}

<?php

namespace App\Exceptions;

use Exception;

class UltimateException extends Exception
{
    public function __construct(string $message, int $code)
    {
        $this->message = $message;
        $this->code = $code;
        parent::__construct();
    }

    public function render()
    {
        $response = ['message' => $this->message];

        return response()->json($response, $this->code);
    }
}

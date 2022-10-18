<?php

namespace App\Exceptions;

use Exception;

class UltimateException extends Exception
{

    public function __construct(String $message,Int $code)
    {
        $this->message = $message;
        $this->code = $code;
        parent::__construct();
    }

    public function render()
    {
        $response = ['message'=> $this->message];
        return response()->json($response,$this->code);
    }
}

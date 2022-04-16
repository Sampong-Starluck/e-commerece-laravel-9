<?php

namespace App\Exceptions;

use Exception;

class ProductnotBelongsToUser extends Exception
{
    public function render()
    {
        return ['error' => 'This product is not belong to this user'];
    }
}

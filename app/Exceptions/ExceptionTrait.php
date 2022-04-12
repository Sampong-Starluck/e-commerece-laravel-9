<?php

namespace App\Exceptions;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Exception trait
 */
trait ExceptionTrait
{
    public function apiException($request, $exception)
    {
        # code...
        if ($exception instanceof ModelNotFoundException) {
            # code...
            return response()->json([
                'errors' => 'Product Model not found'
            ], Response::HTTP_NOT_FOUND);
        }
        if ($exception instanceof NotFoundHttpException) {
            # code...
            return response()->json([
                'errors' => 'Route not found'
            ], Response::HTTP_NOT_FOUND);
        }
        return parent::render($request, $exception);
    }
}


// use Exception;

// class ExceptionTrait extends Exception
// {
//     //
// }

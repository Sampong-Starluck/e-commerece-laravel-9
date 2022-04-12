<?php

namespace App\Exceptions;

use Exception;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use App\Exceptions\ExceptionTrait;
// use Illuminate\Support\Facades\Request;
use Throwable;

class Handler extends ExceptionHandler
{
    use ExceptionTrait;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * Use Throwable instead of Exception (Laravel ^8.x)
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });

        // $this->reportable(function($request, Throwable $exception){
        //     if ($exception instanceof ModelNotFoundException) {
        //         # code...
        //         return response()->json('Model not found', 404);
        //     }
        //     dd($exception);
        //     return parent::render($request, $exception);
        // });
    }

    public function render($request, Throwable $exception)
    {
        if ($request->expectsJson()) {
            // # code...
            // if ($exception instanceof ModelNotFoundException) {
            //         # code...
            //         return response()->json([
            //             'errors' => 'Product Model not found'
            //         ], Response::HTTP_NOT_FOUND);
            // }
            // if ($exception instanceof NotFoundHttpException) {
            //     # code...
            //     return response()->json([
            //         'errors' => 'Route not found'
            //     ], Response::HTTP_NOT_FOUND);
            // }
            return $this->apiException($request, $exception);
        }


        // dd($exception);
        return parent::render($request, $exception);
    }
}

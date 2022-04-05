<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
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
     * @return void
     */
    public function register()
    {
        // $this->renderable(function (\Exception $e, $request) {
        //     if ($request->is('api/*')) {
        //         return response()->json([
        //             'message' => $e->getMessage()
        //         ], 500);
        //     }
        // });
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        if ($e instanceof \Illuminate\Session\TokenMismatchException) {
            return redirect()->route(('top'))->with('flash_message', 'ページの有効期限が切れました');
        }
        if ($e instanceof \Illuminate\Auth\AuthenticationException) {
            return redirect($e->redirectTo())->with('flash_message', '再度ログインしてから操作してください');
        }

        return parent::render($request, $e);
    }
}

<?php

namespace App\Traits;

use Carbon\Carbon;

trait ResponseAPI
{
    /**
     * Return a success JSON response.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function success($data, string $message = null, int $statusCode = 200, $isSuccess = true)
    {


    }

    /**
     * Return an error JSON response.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error(string $message = null, int $statusCode)
    {
        return response()->json(['message' => $message,
            'error' => true,
            'code' => $statusCode,
        ], $statusCode);
    }
}

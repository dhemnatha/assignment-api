<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ResponseAPI
{
    /**
     * Return a success JSON response.
     *
     * @param array|string $data
     * @param string $message
     * @param int $statusCode
     * @param bool $isSuccess
     * @return JsonResponse
     */
    protected function success($data, string $message = null, int $statusCode = 200, $isSuccess = true)
    {
        if ($isSuccess) {
            return response()->json(
                [
                    'message' => $message,
                    'error' => false,
                    'code' => $statusCode,
                    'results' => $data
                ],
                $statusCode
            );
        } else {
            return response()->json(
                [
                    'message' => $message,
                    'error' => true,
                    'code' => $statusCode,
                ],
                $statusCode
            );
        }
    }

    /**
     * Return an error JSON response.
     *
     * @param string $message
     * @param int $statusCode
     * @return JsonResponse
     */
    protected function error(string $message = null, int $statusCode)
    {
        return response()->json(
            [
                'message' => $message,
                'error' => true,
                'code' => $statusCode,
            ],
            $statusCode
        );
    }
}

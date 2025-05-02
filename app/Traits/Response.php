<?php

namespace App\Traits;

use function response;
use Illuminate\Http\JsonResponse;

trait Response
{
    /**
     * Return a JSON success response.
     *
     * @param string      $message
     * @param int         $code
     * @param mixed       $data
     * @param array       $headers
     * @return JsonResponse
     */
    protected function success(string $message, int $code, mixed $data = null, array $headers = []): JsonResponse
    {
        $jsonResponse = response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $code);

        if ($headers) {
            $jsonResponse->withHeaders($headers);
        }

        return $jsonResponse;
    }

    /**
     * Return a JSON error response.
     *
     * @param string       $message
     * @param int          $code
     * @param mixed        $error
     * @param array        $headers
     * @return JsonResponse
     */
    protected function error(string $message, int $code, mixed $error = null, $headers = []): JsonResponse
    {
        $jsonResponse = response()->json([
            'status' => false,
            'message' => $message,
            'error' => $error
        ], $code);

        if ($headers) {
            $jsonResponse->withHeaders($headers);
        }

        return $jsonResponse;
    }
}

<?php

namespace Nuewave\UnifiedResponder;

class UnifiedResponder
{
   
    /**
     * Create a JSON response from data passed through.
     *
     * @return http response
     */
    public static function createResponseFromData($httpCode, $apiCode, $data)
    {
        $response = response()->json([
            'status' => strval($httpCode),
            'code' => strval($apiCode),
            'data' => $data,
        ], $httpCode, [], JSON_PRETTY_PRINT);

        return $response;
    }
}

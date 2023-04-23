<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;

class BaseController extends Controller
{
    /**
     * success response method.
     * @return \Illuminate\Http\Response
     */
    public function sendResponse(object $result, string $message, array $additional = NULL)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];

        if($additional){
            $response['additional'] = $additional;
        }

        return response()->json($response, 200);
    }

    /**
     * return error response.
     * @return \Illuminate\Http\Response
     */
    public function sendError(string $errorMessage)
    {
        $response = [
            'success' => false,
            'error' => $errorMessage,
        ];

        return response()->json($response, 503);
    }
}

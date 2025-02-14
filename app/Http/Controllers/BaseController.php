<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    public const HTTP_STATUST_OK = 200;
    public const HTTP_BAD_REQUEST = 400;
    public const HTTP_TOO_MANY_REQUESTS = 429;


    /**
     * success response method.
     * @param string $type = success|warning|info
     * @param string $message 
     * @param array $data 
     * @param int $code - http code, default 200  
     * @return \Illuminate\Http\JsonResponse
     */

    public function sendResponse(string $type, string $message, array $data = [], int $code = 200, string $outputType = "" ): JsonResponse
    {
        $response = [
            'success' => true,
            'type' => $type,
            'message' => $message,
            'data' => $data,
            'outputType' => $outputType
        ];

        return response()->json($response, $code);
    }

    /**
     * return error response.
     * @param string $type = success|warning|info
     * @param string $message 
     * @param array $data 
     * @param int $code - http code, default 200  
     * @return \Illuminate\Http\JsonResponse
     */

    public function sendError(string $error, array $errorMessages = [], int $code = 404): JsonResponse
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }


    /**
     * return error response.
     * @param string $type = success|warning|info
     * @param string $message 
     * @param array $data 
     * @param int $code - http code, default 200  
     * @return \Illuminate\Http\JsonResponse
     */

     public function sendValidationErrorList(string $error, $validation , int $code = 404): JsonResponse
     {
         $response = [
             'success' => false,
             'message' => $error,
         ];
 
         if (!empty($validation)) {
             $response['validation'] = $validation;
         }
         return response()->json($response, $code);
     }
}
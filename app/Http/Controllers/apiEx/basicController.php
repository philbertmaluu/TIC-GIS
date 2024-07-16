<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BasicController extends Controller
{
    /**
     * success response method.
     *
     * @param $result
     * @param $message
     * @return JsonResponse
     */
    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data' => $result,
            'message' => $message,
        ];
        return response()->json($response, 200);
    }

    /**
     * return error response.
     *
     * @param $error
     * @param array $errorMessages
     * @return JsonResponse
     */
    public function sendError($error, $errorMessages = [])
    {
        $response = [
            'success' => false,
            'status_code' => 0,
            'message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response);
    }

    /**
     * return redirection response.
     *
     * @param $message
     * @param array $data
     * @return JsonResponse
     */
    public function sendRedirect($message, $data = [])
    {
        $response = [
            'success' => 'redirect',
            'status_code' => 1,
            'message' => $message,
            'data' => $data,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response);
    }

    /**
     * return failed response.
     *
     * @return JsonResponse
     */
    public function failedRequest()
    {
        $response = [
            'success' => false,
            'message' => 'Something Went Wrong',
        ];

        return response()->json($response);
    }
}

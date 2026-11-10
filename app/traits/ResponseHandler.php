<?php

namespace App\traits;

use Illuminate\Http\JsonResponse;

trait ResponseHandler{
    
    public function sendResponse(Object $data, string $message = '', int $code = 200) {

        $response = [

            'success' => true,
            'status' => $code,
            'message' => $message,
            'data' => $data,
            

        ];

        return response()->json([$response]);

    }

}

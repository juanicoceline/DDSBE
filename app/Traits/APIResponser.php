<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser
{
    public function successResponse($data, $code = Response::HTTP_OK){
        return response()->json(['Data' => $data], $code);
    }
    public function errorResponse($message, $code){
        return response()->json(['Error' => $message,'code' =>$code], $code);
    }

}
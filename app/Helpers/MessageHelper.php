<?php

namespace App\Helpers;
class MessageHelper{

    public static function error($status, $message){
        return response()->json([
            'status'=> $status,
            'message' => $message,
        ], 200);
    }

    public static function resultAuth($status, $message, $data, $responCode, $token){
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'token' =>$token,
        ], $responCode);
    }
}
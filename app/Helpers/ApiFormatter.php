<?php
//untuk mengatur posisi fie ada di folder mana
//fungsi file ini untuk mengatur hasi API yang akan di tampilkan
namespace App\Helpers;

class ApiFormatter{
    //
    protected static $response = [
        'code'=>NULL,
        'message'=>NULL,
        'data'=>NULL,
    ];
    
    public static function createAPI($code = NULL, $message = NULL, $data = NULL)
    {
        //mengisi data ke variable $response yang di atas
        self::$response['code'] = $code;
        self::$response['message'] = $message;
        self::$response['data'] = $data;
        //mengambalikan hasil pengisian data $response dengan format json
        return response()->json(self::$response,self::$response['code']);
    }
}
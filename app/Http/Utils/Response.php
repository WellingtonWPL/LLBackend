<?php

namespace App\Http\Utils;

class Response {

   
   /**
    * Retorna código de sucesso na operação
    * @param $message
    * @param null $returnData
    * @param string $status
    * @return \Illuminate\Http\JsonResponse
    */
   public static function success($message, $returnData = null, $status = '200') {
      return response()->json(["success" => true, "message" => $message, "return" => $returnData], $status);
   }

   /**
    * Instrução para retorno de excessões conhecidas - tratadas
    * @param $message
    * @param null $returnData
    * @param string $status
    * @return \Illuminate\Http\JsonResponse
    */
   public static function faillure($message, $returnData = null, $status = '500') {
      return response()->json(["success" => false, "message" => $message, "return" => $returnData, "unknow_exception" => false], $status);
   }

  
}

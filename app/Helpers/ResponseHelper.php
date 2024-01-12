<?php
namespace App\Helpers;

class ResponseHelper
{
  public static function success($status, $data, $message)
  {
    return [
      'status' => $status,
      'data' => $data,
      'message' => $message,
    ];
  }

  public static function error($status, $errorMessage)
  {
    return [
      'status' => $status,
      'message' => $errorMessage
    ];
  }
}

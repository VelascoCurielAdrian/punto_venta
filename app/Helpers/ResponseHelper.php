<?php
namespace App\Helpers;

use CodeIgniter\API\ResponseTrait;


class ResponseHelper
{
  use ResponseTrait;
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
      'type' => 'error',
      'status' => $status,
      'message' => $errorMessage,
      'title' => Messages::ERROR,
    ];
  }
}

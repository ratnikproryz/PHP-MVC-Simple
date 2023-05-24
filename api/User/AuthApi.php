<?php

namespace Api\User;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class AuthApi
{
   public function __construct()
   {
   }

   public function getEmail()
   {
      return "ptphuc.20it1@vku.udn.vn";
   }

   public function log()
   {
      $log = new Logger('User');
      $log->pushHandler(new StreamHandler('app.log', Logger::NOTICE));
      $log->notice('User: ' . $this->getEmail());
   }
}

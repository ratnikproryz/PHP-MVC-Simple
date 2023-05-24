<?php

use Api\User\AuthApi;
require __DIR__ . '/vendor/autoload.php';

$api = new AuthApi();
echo "Email: ". $api->getEmail();

$api->log();
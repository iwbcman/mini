<?php
echo 'test';

require '../vendor/autoload.php';
$app = new \App\App;
$container = $app->getContainer();

$container['config'] = function () {
  return [
    'db_driver' => 'mysql',
    'db_host' => '127.0.0.1',
    'db_name' => 'mini',
    'db_user' => 'root',
    'db_password' => 'wiggly',
  ];
};
var_dump($container['config']);
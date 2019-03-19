<?php
return [
  'id' => 'php',
  'basePath' => realpath(__DIR__.'/../'),
  'components' => [

    'db' => [
      'class' => 'yii\db\Connection',
      'dsn' => 'mysql:host=127.0.0.1:3306;dbname=cardb',
      'username' => 'root',
      'password' => '',
      'charset' => 'utf8',
    ]
  ]
];
 ?>

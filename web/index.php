<?php
  require __DIR__.'/../vendor/yiisoft/yii2/Yii.php';
  $config = require __DIR__.'/../config/webapp.php';
  $yii = new yii\web\Application($config);
  $yii->run();
 ?>

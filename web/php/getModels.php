<?php
  define ('YII_DEBUG', true);
  require __DIR__.'/../../vendor/yiisoft/yii2/Yii.php';
  $config = require __DIR__.'/../../config/webapp1.php';
  $yii = new yii\web\Application($config);

  $id = $_POST['id'];
  $json = 'none';
  if(isset($id))
  {
    $command = Yii::$app->db->createCommand('SELECT model FROM carbrandsandmodels LEFT JOIN carmodels ON id_model = idmodel WHERE carbrandsandmodels.id_brand = '.$id);
    $listModel = $command->queryAll();
    $json = "{\"models\":[";

    $i = 0;
    foreach ($listModel as $k => $models)
    {
      foreach ($models as $key => $model)
      {
        if($i !== count($models))
          $json = $json."\"".$model."\" ,";
        else $json = $json."\"".$model."\"";
        $i++;
      }
    }
  }

    $json = $json."]}";

  echo $json;
?>

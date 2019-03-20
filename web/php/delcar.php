<?php
define ('YII_DEBUG', true);
require __DIR__.'/../../vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__.'/../../config/webapp1.php';
$yii = new yii\web\Application($config);
//use app\models\Catalog;

use yii\db\ActiveRecord;

class Catalog extends ActiveRecord
{
  // const STATUS_INACTIVE = 0;
  // const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carcatalog}}';
  }
}

$car = Catalog::findOne($_POST['id']);
$car->delete();
?>

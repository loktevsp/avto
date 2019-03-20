<?php
namespace app\models;

use yii\db\ActiveRecord;

class CarCatalog extends ActiveRecord
{
  const STATUS_INACTIVE = 0;
  const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carcatalog}}';
  }
}
?>

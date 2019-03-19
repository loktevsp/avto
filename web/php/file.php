<?php
define ('YII_DEBUG', true);
require __DIR__.'/../../vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__.'/../../config/webapp1.php';
$yii = new yii\web\Application($config);
//use app\models\Catalog;
print_r($_POST);

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

class CarSecurity extends ActiveRecord
{
  // const STATUS_INACTIVE = 0;
  // const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carandsecurity}}';
  }
}

$car = new Catalog();
// вставить новую строку данных
$car->brand = $_POST['brand'];
$car->model = $_POST['model'];
$car->mileage  = $_POST['mileage'];
$car->price = $_POST['price'];
$car->phone = $_POST['phone'];
$car->save();


$c = Catalog::find()->asArray()->all();
  //print_r(count($_POST['security']));
for($i = 0; $i < count($_POST['security']); $i++)
{
  $carsecurity = new CarSecurity();
  $carsecurity->id_car = $c[count($c)-1]['idCar'];
  $carsecurity->id_security = $_POST['security'][$i];
  $carsecurity->save();
}

$s = CarSecurity::find()->asArray()->all();
print_r(count($s));
$car = Catalog::findOne($c[count($c)-1]['idCar']);
$car->idSecurity = $s[count($s)-1]['id'];
$car->save();

// обновить имеющуюся строку данных
//$cars = Customer::findOne(123);
//$cars->email = 'james@newexample.com';
//$cars->save();
 ?>

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

class CarSecurity extends ActiveRecord
{
  // const STATUS_INACTIVE = 0;
  // const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carandsecurity}}';
  }
}

class CarExterior extends ActiveRecord
{
  // const STATUS_INACTIVE = 0;
  // const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carandexterior}}';
  }
}

class CarComfort extends ActiveRecord
{
  // const STATUS_INACTIVE = 0;
  // const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carandcomfort}}';
  }
}

class CarMultimedia extends ActiveRecord
{
  // const STATUS_INACTIVE = 0;
  // const STATUS_ACTIVE = 1;

  public static function tableName()
  {
      return '{{carandmultimedia}}';
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

$catalog = Catalog::find()->asArray()->all();
$idCar = $catalog[count($catalog)-1]['idCar'];

//--------------------------------------------------------------------
if(isset($_POST['security']))
{
  for($i = 0; $i < count($_POST['security']); $i++)
  {
    $carsecurity = new CarSecurity();
    $carsecurity->id_car = $idCar;
    $carsecurity->id_security = $_POST['security'][$i];
    $carsecurity->save();
  }
}
//--------------------------------------------------------------------
if(isset($_POST['exterior']))
{
  for($i = 0; $i < count($_POST['exterior']); $i++)
  {
    $carexterior = new CarExterior();
    $carexterior->id_car = $idCar;
    $carexterior->id_exterior = $_POST['exterior'][$i];
    $carexterior->save();
  }
}
//--------------------------------------------------------------------
if(isset($_POST['comfort']))
{
  for($i = 0; $i < count($_POST['comfort']); $i++)
  {
    $carcomfort = new CarComfort();
    $carcomfort->id_car = $idCar;
    $carcomfort->id_comfort = $_POST['comfort'][$i];
    $carcomfort->save();
  }
}
//--------------------------------------------------------------------
if(isset($_POST['multimedia']))
{
  for($i = 0; $i < count($_POST['multimedia']); $i++)
  {
    $carmultimedia = new CarMultimedia();
    $carmultimedia->id_car = $idCar;
    $carmultimedia->id_multimedia = $_POST['multimedia'][$i];
    $carmultimedia->save();
  }
}

$car = Catalog::findOne($idCar);
$car->urlImg1  = $_POST['urlImg1'];
$car->urlImg1_720x540  = $_POST['urlImg1_720x540'];
$car->urlImg1_146x106  = $_POST['urlImg1_146x106'];
$car->urlImg2  = $_POST['urlImg2'];
$car->urlImg2_720x540  = $_POST['urlImg2_720x540'];
$car->urlImg2_146x106  = $_POST['urlImg2_146x106'];
$car->urlImg3  = $_POST['urlImg3'];
$car->urlImg3_720x540  = $_POST['urlImg3_720x540'];
$car->urlImg3_146x106  = $_POST['urlImg3_146x106'];
$car->save();
 ?>

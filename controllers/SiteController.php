<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use app\models\CarCatalog;

class SiteController extends Controller
{
  public function actionIndex()
  {
      // выполняем запрос
      $sql = 'SELECT * FROM carcatalog ORDER BY carcatalog.idCar DESC ';
      $query = array_reverse(CarCatalog::find()->asArray()->all());

      // делаем копию выборки
      $countQuery = CarCatalog::find();
      // подключаем класс Pagination, выводим по 5 пунктов на страницу
      $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 5]);
      // приводим параметры в ссылке к ЧПУ
      $pages->pageSizeParam = false;
      $count= 0;
      for($i = $pages->offset; $i < count($query); $i++)
      {
        if($count !== $pages->limit)
          $models[$count++] = $query[$i];
        else break;
      }
      // Передаем данные в представление
      return $this->render('index', [
           'models' => $models,
           'pages' => $pages,
      ]);
  }
  public function actionAddcar()
  {
      return $this->render('addcar');
  }
  public function actionCarmap()
  {
      return $this->render('carmap');
  }
  public function actionAbout()
  {
      return $this->render('about');
  }
}
 ?>

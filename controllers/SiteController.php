<?php
namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
  public function actionIndex()
  {
      return $this->render('index');
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

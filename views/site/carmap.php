<?php
  use app\models\CarCatalog;
  use app\models\CarAndSecurity;
  use app\models\CarAndExterior;
  use app\models\CarAndComfort;
  use app\models\CarAndMultimedia;
  use app\models\Security;
  use app\models\Exterior;
  use app\models\Comfort;
  use app\models\Multimedia;

  $car = CarCatalog::find()->where(['idCar' => $_GET['id']])->one();
  $security = CarAndSecurity::find()->where(['id_car' => $_GET['id']])->asArray()->all();
  $exterior = CarAndExterior::find()->where(['id_car' => $_GET['id']])->asArray()->all();
  $comfort = CarAndComfort::find()->where(['id_car' => $_GET['id']])->asArray()->all();
  $multimedia = CarAndMultimedia::find()->where(['id_car' => $_GET['id']])->asArray()->all();
?>
<?php
print('<div><h1>'.$car['brand'].' '.$car['model'].'</h1></div>');
?>

<div class='imagescar' style='position: absolute; top: 150px; left: 60px;'>
  <?php
  if(isset($car['urlImg1_720x540']))
    print('<img src="'.'/php/pics/'.$car['urlImg1_720x540'].'" style="position: absolute; max-width: 720px; max-height: 540px;" />');
  if(isset($car['urlImg2_146x106']))
    print('<img src="'.'/php/pics/'.$car['urlImg2_146x106'].'" style="position: absolute; top: 520px; left: 0px; max-width: 146px; max-height: 106px;" />');
  if(isset($car['urlImg3_146x106']))
    print('<img src="'.'/php/pics/'.$car['urlImg3_146x106'].'" style="position: absolute; top: 520px; left: 156px; max-width: 146px; max-height: 106px;" />');
  ?>
</div>
<div style='position: absolute; top: 60px; right: 180px;'><h1>Информация:</h1></div>
<div class='settingcar' style='margin-left: 850px; margin-top: 50px; font-size: 20px;'>
  <?php
  print('<div>Марка: '.$car['brand'].'</div>');
  print('<div>Модель: '.$car['model'].'</div>');
  print('<div>Пробег: '.$car['mileage'].'</div>');
  print('<div>');
    $flag = false;
    print('<div>Доп. оборудование:</div>');
    if(count($security))
    {
        print('<div>Безопасность: ');
          for($i = 0; $i < count($security); $i++)
            if($i + 1 !== count($security))
              print(Security::find()->where(['idSecurity' => $security[$i]['id_security']])->one()['security'].',');
            else print(Security::find()->where(['idSecurity' => $security[$i]['id_security']])->one()['security']);
        print('</div>');
        $flag = true;
    }
    if(count($exterior))
    {
      print('<div>Экстерьер: ');
      for($i = 0; $i < count($exterior); $i++)
        if($i + 1 !== count($exterior))
          print(Exterior::find()->where(['idExterior' => $exterior[$i]['id_exterior']])->one()['exterior'].',');
        else print(Exterior::find()->where(['idExterior' => $exterior[$i]['id_exterior']])->one()['exterior']);
    print('</div>');
      $flag = true;
    }
    if(count($comfort))
    {
      print('<div>Комфорт: ');
      for($i = 0; $i < count($comfort); $i++)
        if($i + 1 !== count($comfort))
          print(Comfort::find()->where(['idComfort' => $comfort[$i]['id_comfort']])->one()['comfort'].',');
        else print(Comfort::find()->where(['idComfort' => $comfort[$i]['id_comfort']])->one()['comfort']);
    print('</div>');
      $flag = true;
    }
    if(count($multimedia))
    {
      print('<div>Мультимедиа: ');
      for($i = 0; $i < count($multimedia); $i++)
        if($i + 1 !== count($multimedia))
          print(Multimedia::find()->where(['idMultimedia' => $multimedia[$i]['id_multimedia']])->one()['multimedia'].',');
        else print(Multimedia::find()->where(['idMultimedia' => $multimedia[$i]['id_multimedia']])->one()['multimedia']);
      print('</div>');
      $flag = true;
    }
    if($flag == false) print('<div>Нет</div>');
  print('</div>');
  print('<div>Цена: '.$car['price'].' р.</div>');
  print('<div>Тел.: '.$car['phone'].'</div>');
?>
</div>

<?php
  $this->registerJsFile('/js/eventindex.js');
  use yii\widgets\LinkPager;
 ?>
<h1>Объявления</h1>
<div class='t_addcartable' style='margin-left: 550px; margin-top: -40px;'><a style='color: #f55; font-size: 18px;' href="/site/addcar" >Добавить новое объявление</a> </div>
<div class='cartable' style='height: auto; width: 800px; margin-top: 40px;'>
  <div class='cartablehead' style='height: 20px; width: 800px; margin-top: 10px; background-color:#db5;'>
    <span class='t_bm' style='margin-left: 20px;  font-size: 14px;'> Марка, модель </span>
    <span class='t_price' style='margin-left: 300px;  font-size: 14px;'> Цена </span>
  </div>
  <div id = 'cars' >
      <?php
  if(isset($models))
  for($i = 0; $i < count($models); $i++)
  {
    print('<div class="car" style="height: 120px; width: 800px; padding-top: 55px; background-color:#ddd; border-style: solid;  border-color:#ccc; border-width: 2px;">');
      print('<div class="brandandmodel" style="margin-left: 20px; margin-top: -10px; color: #db5; font-size: 20px;"> <a href="/site/carmap?id='.$models[$i]['idCar'].'" >'.$models[$i]['brand'].' '.$models[$i]['model'].'</a> </div>');
      print('<img class="imgcar" src="'.'/php/pics/'.$models[$i]['urlImg1_146x106'].'" style="margin-left: 200px; margin-top: -68px; max-width: 146px; max-height: 106px; width: 100%; height: auto;" />');
      print('<div class="price" style="margin-left: 400px; margin-top: -65px; color: #f55; font-size: 20px;"> '.$models[$i]['price'].' р. </div>');
      print('<div class="delcar" style="margin-left: 700px; margin-top: -22px;"><a onclick="delcar('.$models[$i]['idCar'].');" style="color: #f55; font-size: 14px;" href="#" > Удалить </a></div>');
    print('</div>');
  }
  else {
    print('<div class="car" style="height: 120px; width: 800px; padding-left: 55px; padding-top: 40px; background-color:#ddd; border-style: solid;  border-color:#ccc; border-width: 2px; color: #f55; font-size: 18px;">');
    print('Нет объявлений');
    print('</div>');
  }

  // отображаем постраничную разбивку
  echo LinkPager::widget([
      'pagination' => $pages,
  ]);
  ?>
  </div>
</div>

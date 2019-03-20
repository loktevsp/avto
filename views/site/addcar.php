<?php
  $this->registerJsFile('/js/eventaddcar.js');
  $command = Yii::$app->db->createCommand('SELECT brand FROM carbrands');
  $listBrand = $command->queryAll();
  $command = Yii::$app->db->createCommand('SELECT security FROM security');
  $listSecurity = $command->queryAll();
  $command = Yii::$app->db->createCommand('SELECT exterior FROM exterior');
  $listExterior = $command->queryAll();
  $command = Yii::$app->db->createCommand('SELECT comfort  FROM comfort ');
  $listComfort  = $command->queryAll();
  $command = Yii::$app->db->createCommand('SELECT multimedia   FROM multimedia  ');
  $listMultimedia  = $command->queryAll();
?>
<h2> Новое объявление </h2>

  <label for="selectBrand">Марка:*</label>
  <div class="form-group">
    <div class="select-group" style='width:600px;'>
        <select id="sbrand" style='width:100%; height:30px;'>
          <!-- Выпадающее меню-->
          <option style='margin-left:5px;'>Выберите марку машины</option>
          <?php
          $count = 0;
          foreach ($listBrand as $k => $brands)
          {
            foreach ($brands as $key => $brand)
            {
              if(isset($brand))
              {
                $count++;
                print ('<option style="margin-left:5px;" name="'.$brand.'" value="'.$count.'">'.$brand.'</option>');
              }
            }
          }
          ?>
        </select>
    </div>
  </div>
  <label for="selectModel">Модель:*</label>
  <div class="form-group">
    <div class="select-group" style='width:600px;'>
        <select class="select-model" id="smodel" style='width:100%; height:30px;'>
          <!-- Выпадающее меню -->
          <option selected style='margin-left:5px;' >Выберите модель машины</option>
        </select>
    </div>
  </div>
  <label for="inputMileage">Пробег:*</label>
  <div class="form-group">
    <input class="form-control" style='width:600px;' id="inputMileage" placeholder="Введите пробег">
  </div>
  <label for="selectModel">Дополнительное оборудование (опции):</label>
  <div class="form-group">
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">
          Безопасность
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:400%;' id="security">
            <?php
            $count = 0;
            foreach ($listSecurity as $k => $securitys)
            {
              foreach ($securitys as $key => $security)
              {
                $count++;
                print ('<li>');
                print ('<input type="checkbox" class="form-check-input" id="'.$count.'" text="'.$security.'">');
                print ('<label style="margin-left:10px;" name="'.$security.'" class="form-check-label" for="'.$security.'"> '.$security.'</label>');
                print ('</li>');
              }
            }
            ?>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
          Экстерьер
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:400%;' id="exterior">
            <?php
            $count = 0;
            foreach ($listExterior as $k => $exteriors)
            {
              foreach ($exteriors as $key => $exterior)
              {
                $count++;
                print ('<li>');
                print ('<input type="checkbox" class="form-check-input" id="'.$count.'" text="'.$exterior.'">');
                print ('<label style="margin-left:10px;" name="'.$exterior.'" class="form-check-label" for="'.$exterior.'"> '.$exterior.'</label>');
                print ('</li>');
              }
            }
            ?>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">
          Комфорт
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:400%;' id="comfort">
            <?php
            $count = 0;
            foreach ($listComfort as $k => $comforts)
            {
              foreach ($comforts as $key => $comfort)
              {
                $count++;
                print ('<li>');
                print ('<input type="checkbox" class="form-check-input" id="'.$count.'" text="'.$comfort.'">');
                print ('<label style="margin-left:10px;" name="'.$comfort.'" class="form-check-label" for="'.$comfort.'"> '.$comfort.'</label>');
                print ('</li>');
              }
            }
            ?>
        </ul>
    </div>
    <div class="btn-group">
        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
          Мультимедия
          <!-- <span class="caret"></span> -->
        </button>
        <!-- Выпадающее меню -->
        <ul class="dropdown-menu" style='width:400%;' id="multimedia">
            <?php
            $count = 0;
            foreach ($listMultimedia as $k => $multimedias)
            {
              foreach ($multimedias as $key => $multimedia)
              {
                $count++;
                print ('<li>');
                print ('<input type="checkbox" id="'.$count.'" text="'.$multimedia.'">');
                print ('<label style="margin-left:10px;" name="'.$multimedia.'" class="form-check-label" for="'.$multimedia.'"> '.$multimedia.'</label>');
                print ('</li>');
              }
            }
            ?>
        </ul>
</div>
  </div>
  <label for="inputMileage">Цена:*</label>
  <div class="form-group">
    <input class="form-control" style='width:600px;' id="inputPrice" placeholder="Введите цену">
  </div>
  <label for="inputMileage">Телефон:*</label>
  <div class="form-group">
    <input class="form-control" style='width:600px;' id="inputPhone" placeholder="Введите телефон">
  </div>
  <label for="inputMileage">Фото:</label>
  <div class="form-group" style='margin-top: -30px;'>
      <img id='imgcar1' src="/load.jpg" style='margin-left: 40px; margin-top: 40px; max-width: 146px; max-height: 106px; width: 100%; height: auto;' />
        <input type='file' name="upload1" id='img1' style='margin-left: 200px; margin-top: -60px;'>
      <img id='imgcar2' src="/load.jpg" style='margin-left: 40px; margin-top: 40px; max-width: 146px; max-height: 106px; width: 100%; height: auto;' />
        <input type='file' name="upload2" id='img2' style='margin-left: 200px; margin-top: -60px;'>
      <img id='imgcar3' src="/load.jpg" style='margin-left: 40px; margin-top: 40px; max-width: 146px; max-height: 106px; width: 100%; height: auto;' />
        <input type='file'  name="upload3" id='img3' style='margin-left: 200px; margin-top: -60px;'>
  </div>
  <div class="form-group" style='margin-top:80px;'>
    <div class="btn-group">
        <button type="button" class="btn btn-danger" id="savecar">
          Подать объявление
        </button>
    </div>
  </div>
</div>

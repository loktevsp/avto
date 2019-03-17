<?php $this->beginPage(); ?>
<html>
  <head>
    <title>Avto.ru</title>
    <?php $this->head(); ?>
  </head>
  <body>
    <?php $this->beginBody(); ?>
    <?php
      \yii\bootstrap\NavBar::begin([
        'brandLabel' => '<b>Avto.ru</b>',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
          'class' => 'navbar-default navbar-fixed-top'
          ]
      ]);
      \yii\bootstrap\NavBar::end();
    ?>
    <div class="container" style="margin-top: 50px">
      <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
  </body>
</html>
<?php $this->endPage(); ?>

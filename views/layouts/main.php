<?php
use app\assets\AppAsset;
AppAsset::register($this);

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;


$this->beginPage();
?>

<html>
  <head>
    <title>Avto Пятигорск</title>
    <?php $this->head(); ?>
  </head>
  <body style = "background-color: #DDD;">
    <?php $this->beginBody(); ?>
    <?php
      NavBar::begin([
        'brandLabel' => '<b>Avto Пятигорск</b>',
        'brandUrl' => ['/site/index'],
        'options' => [
          'class' => 'navbar-default navbar-fixed-top'
          ]
      ]);
      $items = [
        ['label' => 'About', 'url' => ['/site/about']]
      ];
      echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $items
      ]);
      NavBar::end();
    ?>
    <div class="container" style="margin-top: 50px">
      <?= $content ?>
    </div>
    <?php $this->endBody(); ?>
  </body>
</html>
<?php $this->endPage(); ?>

<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot'; //алиас каталога с файлами, который соответствует @web
    public $baseUrl = '@web';//Алиас пути к файлам

    public $css = [];
    public $js = [
      'js/jquery.js',
    ];

    public $depends = [
    'yii\web\YiiAsset',
    'yii\bootstrap\BootstrapAsset',
    ];

    //public $jsOptions = ['position' => \yii\web\View::POS_END];
}
?>

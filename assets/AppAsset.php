<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/web';

    public $css = [];
    public $js = [
      'js/web.js',
    ];

    public $depends = [];
}
?>

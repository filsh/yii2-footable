<?php

namespace yii\footable;

use \Yii;

class FootableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/footable';

    public $js = [
        'js/footable.js'
    ];
    
    public $css = [
        'less/footable.core.less',
        'less/footable.metro.less'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
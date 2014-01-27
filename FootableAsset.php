<?php

namespace yii\footable;

use \Yii;

class FootableAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/filsh/footable';

    public $js = [
        'js/footable.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
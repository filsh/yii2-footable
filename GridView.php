<?php

namespace yii\footable;

class GridView extends \yii\grid\GridView
{
    public function run()
    {
        FootableAsset::register($this->getView());
        parent::run();
    }
}
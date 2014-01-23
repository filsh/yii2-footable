<?php

namespace yii\footable;

class GridView extends \yii\grid\GridView
{
    public $footableOptions = [];
    
    public function run()
    {
        FootableAsset::register($this->getView());
        $this->registerScript();
        parent::run();
    }
    
    protected function registerScript()
    {
        $configure = !empty($this->footableOptions) ? Json::encode($this->footableOptions) : '';
        $this->getView()->registerJs("jQuery('#{$this->options['id']} table').footable({$configure});");
    }
}
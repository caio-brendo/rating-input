<?php

namespace caiobrendo;

use yii\web\AssetBundle;

class RatingAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $js = ['js/index.js'];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

}
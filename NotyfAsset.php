<?php

namespace ereminmdev\yii2\notyf;

use yii\web\AssetBundle;

class NotyfAsset extends AssetBundle
{
    public $sourcePath = '@npm/notyf';

    public $css = [
        'notyf.min.css',
    ];

    public $js = [
        YII_DEBUG ? 'notyf.umd.js' : 'notyf.min.js',
    ];
}

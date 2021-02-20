<?php

namespace ereminmdev\yii2\notyf;

use yii\web\AssetBundle;

/**
 * Class NotyfAsset
 * @package ereminmdev\yii2\notyf
 */
class NotyfAsset extends AssetBundle
{
    public $sourcePath = '@npm/notyf';

    public $css = [
        'notyf.min.css',
    ];

    public $js = [
        YII_DEBUG ? 'notyf.js' : 'notyf.min.js',
    ];
}

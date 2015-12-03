<?php

namespace cubiclab\widgets\pace;

/**
 * @see http://github.hubspot.com/pace/
 */
class PaceAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/pace';
    public $css = [
        'themes/blue/pace-theme-flash.css',
    ];
    public $js = [
        'pace.min.js',
    ];
    public $jsOptions = [
        'position' => \yii\web\View::POS_HEAD,
    ];
}
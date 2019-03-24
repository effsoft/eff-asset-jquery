<?php

namespace effsoft\eff\asset\jquery;

use effsoft\eff\EffAssetBundle;

class JqueryAssetBundle extends EffAssetBundle{

    public $sourcePath = '@bower/jquery/dist';

    public function init(){
        parent::init();

    }

    public $js = [
        YII_ENV_DEV ? 'jquery.js':'jquery.min.js',
    ];

    public $publishOptions = [
        'only' => [
            'jquery.js',
            'jquery.min.js',
        ],
    ];

}
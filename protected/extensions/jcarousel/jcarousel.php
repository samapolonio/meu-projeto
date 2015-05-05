<?php

class jcarousel extends CWidget
{
    public function run()
    {
 
        $css = dirname(__FILE__).DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'jcarousel.basic.css';
 
        $css2 = dirname(__FILE__).DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'style.css';
 
        $jsBasic = dirname(__FILE__).DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'jcarousel.basic.js';
        $jsCarousel = dirname(__FILE__).DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'jquery.jcarousel.min.js';
 
        $cssPub = Yii::app()->getAssetManager()->publish($css);
 
        $css2Pub = Yii::app()->getAssetManager()->publish($css2);
 
        $jsBasicPub = Yii::app()->getAssetManager()->publish($jsBasic);
 
        $jsCarouselPub = Yii::app()->getAssetManager()->publish($jsCarousel);
 
        $cs=Yii::app()->clientScript;
 
        $cs->registerCssFile($cssPub);
        $cs->registerCssFile($css2Pub);
        $cs->registerScriptFile($jsBasicPub);
        $cs->registerScriptFile($jsCarouselPub);
 
        $cs->registerCoreScript('jquery');
    }
 
}
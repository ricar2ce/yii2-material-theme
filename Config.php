<?php
namespace rce\material;

use Yii;

class Config
{
    public static function sidebarColor()
    {
        /** @var Asset $bundle */
        $bundle = Yii::$app->assetManager->getBundle('rce\material\Assets');

        return $bundle->sidebarColor;
    }


    public static function sidebarBackgroundColor()
    {
        /** @var Asset */
        $bundle = Yii::$app->assetManager->getBundle('rce\material\Assets');

        return $bundle->sidebarBackgroundColor;
    }

    public static function sidebarBackgroundImage()
    {
        /** @var Asset */
        $bundle = Yii::$app->assetManager->getBundle('rce\material\Assets');

        return $bundle->sidebarBackgroundImage;
    }

    public static function siteTitle()
    {
        /** @var Asset */
        $bundle = Yii::$app->assetManager->getBundle('rce\material\Assets');

        return $bundle->siteTitle;
    }

    public static function logoMini()
    {
        /** @var Asset */
        $bundle = Yii::$app->assetManager->getBundle('rce\material\Assets');

        return $bundle->logoMini;
    }
}

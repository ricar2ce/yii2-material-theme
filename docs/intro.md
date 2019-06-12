Yii2 Material Theme
=====================

*Material UI for Yii2 Framework, based on [Creative Tim Material Dashboard](https://www.creative-tim.com/product/material-dashboard)*

![alt text](http://s3.amazonaws.com/creativetim_bucket/products/50/original/opt_md_thumbnail.jpg "Material Dashboard Free")

Material Dashboard is a free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design. We are very excited to introduce our take on the material concepts through an easy to use and beautiful set of components. Material Dashboard was built over the popular Bootstrap framework and it comes with a couple of third-party plugins redesigned to fit in with the rest of the elements.

Material Dashboard makes use of light, surface and movement. The general layout resembles sheets of paper following multiple different layers, so that the depth and order is obvious. The navigation stays mainly on the left sidebar and the content is on the right inside the main panel.

This product came as a result of users asking for a material dashboard after we released our successful [Material Kit](http://www.creative-tim.com/product/material-kit). We developed it based on your feedback and it is a powerful bootstrap admin dashboard, which allows you to build products like admin panels, content managements systems and CRMs.

Material Dashboard comes with 5 color filter choices for both the sidebar and the card headers (blue, green, orange, red and purple) and an option to have a background image on the sidebar.

Material Dashboard uses a framework built by our friend [Federico - Bootstrap Material Design](http://fezvrasta.github.io/bootstrap-material-design/), who did an amazing job creating the backbone for the material effects, animations, ripples and transitions. Big thanks to his team for the effort and forward thinking they put into it.

Special thanks go to:
[Julio C. Ramos](https://github.com/ramosisw/yii2-material-dashboard) for yii2-material-dashboard,
[sanpyaelin](https://github.com/sanpyaelin/yii2-material-assets) for yii2-material-dashboard,
[Robert McIntosh](https://github.com/mouse0270/bootstrap-notify) for the notification system,
[Chartist](https://gionkunz.github.io/chartist-js/) for the wonderful charts,
[Creative Tim](https://github.com/creativetimofficial/material-dashboard/) for the marvelous theme.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer require --prefer-dist ricar2ce/yii2-material-theme "*"
```

or add

```
"ricar2ce/yii2-material-theme": "*"
```

to the require section of your `composer.json` file.



Quick Start
-----------

Once the extension is installed, you can have a **preview** by reconfiguring the path mappings of the view component:

```php
'components' => [
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/ricar2ce/yii2-material-theme/view'
            ],
        ],
    ],
],
```
Or in your layouts/main.php include followin code for use de assets

```php
<?php

/* @var $this \yii\web\View */
/* @var $content string */
/*
use yii\dependencies
*/
//Register class
if (class_exists('rce\material\Assets')) {
    rce\material\Assets::register($this); ?>
}
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
```

>Don't forget to remove `'yii\bootstrap\BootstrapAsset'` and `'yii\bootstrap\BootstrapPluginAsset'` from `backend\asset\AppAsset`(advence) or `app\asset\AppAsset`(basic)


Customization
-------------

- Copy files from `vendor/ricar2ce/yii2-material-theme/view`
- Remove the custom `view` configuration from your application by entered the new path mappings, if you have made them before.
-------------


### Web-font usage

This extension use the fallowing depend for the font icons usage:
Nick Tsai [yii2-fontawesome](https://github.com/yidas/yii2-fontawesome)
Andrey Izman [yii2-material-design-icons](https://github.com/mervick/yii2-material-design-icons)

----

### Config template

Default config.
```php
[
    'siteTitle' = 'Material Dashboard',
    'sidebarColor' => 'rose', // "purple | azure | green | orange | danger | rose"
    'sidebarBackgroundColor' => 'black', // "black | white"
    'sidebarBackgroundImage' => 'template/material-dashboard/img/sidebar-1.jpg'
]
```


 You can change it in config file.
```php
'components' => [
    'assetManager' => [
        'bundles' => [
            'rce\material\Assets' => [
	              'siteTitle' = 'Your Site Name',
                'sidebarColor' => 'azure',
                'sidebarBackgroundColor' => 'black',
                'sidebarBackgroundImage' => 'img url'
            ],
        ],
    ],
],
```
or

using bundled assets

```php
    Yii::$container->set(
        Assets::className(),
        [
	    'siteTitle' = 'Your Site Name',
	    'sidebarColor' => 'rose',
	    'sidebarBackgroundColor' => 'black',
	    'sidebarBackgroundImage' => 'img url'
        ]
    );
```

-----

### Sidebar menu - Widget Menu

```php
        $menu = RCEmenu::widget(
            [
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site/index']],
                    [
                        'label' => 'Multi Level Collapse',
                        'icon' => 'swap_vertical_circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Level One', 'url' => '#',],
                            [
                                'label' => 'Level Two',
                                'icon' => 'swap_vertical_circle',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Three', 'url' => '#',],
                                    ['label' => 'Level Three', 'url' => '#',],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Some tools',
                        'icon' => 'build',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'settings_input_composite', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'bug_report', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        );
```

create menu.php in `common\models`(advence) or `app\models`(basic) if you configuring the path mappings of the view component

example:
```php
<?php
namespace common\models;

use Yii;
use rce\material\widgets\Menu as RCEmenu;

class Menu  
{
    static function getMenu() {
        $menu = RCEmenu::widget(
            [
                'items' => [
                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site/index']],
                    [
                        'label' => 'Multi Level Collapse',
                        'icon' => 'swap_vertical_circle',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Level One', 'url' => '#',],
                            [
                                'label' => 'Level Two',
                                'icon' => 'swap_vertical_circle',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Three', 'url' => '#',],
                                    ['label' => 'Level Three', 'url' => '#',],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Some tools',
                        'icon' => 'build',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'settings_input_composite', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'bug_report', 'url' => ['/debug'],],
                        ],
                    ],
                ],
            ]
        );
        return $menu;
    }

}

```
By default to icons will be added prefix of [Material Icon](https://material.io/tools/icons/)

----

### Notification : Noti widget

This is the Noti widget and  Yii 2 enhanced wrapper for the [Bootstrap Notify plugin](https://github.com/mouse0270/bootstrap-notify)

Usage

Add widget to your `layout/main` :
```php
use rce\material\widgets\Noti;

<?= Noti::widget(); ?>
```

Noti widget renders a message from session flash. All flash messages are displayed
in the sequence they were assigned using setFlash. You can set message as following:

Set the message in your action, for example:

```php
Yii::$app->session->setFlash('success', 'This is the success');
Yii::$app->session->setFlash('info', 'Your info');
Yii::$app->session->setFlash('warning', 'Your warning');
Yii::$app->session->setFlash('error', 'Your error');
```

Also, you can set multiple messages as follows:

```php
Yii::$app->session->setFlash('info', ['message 1', 'message 2']);
```

Render message without the session flash
```php
<?= rce\material\widgets\Noti::widget([
    'useSessionFlash' => false,
    'options' => [
        'message' => 'Your message',
    ],
    'clientOptions' => [
        'type' => 'info', // "error | warning | info | success | danger "
    ]
]); ?>
```

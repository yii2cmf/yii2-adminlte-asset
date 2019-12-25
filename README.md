AdminLTE 3 - Free admin dashboard template based on Bootstrap 4 for Yii2 framework
=============================================================
AdminLTE is a fully responsive administration template. Based on Bootstrap 4 framework. Highly customizable and easy to use. Fits many screen resolutions from small mobile devices to large desktops.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require yii2cmf/yii2-adminlte-asset:0.2
```

or add

```
"yii2cmf/yii2-adminlte-asset": "~0.2"
```

to the require section of your `composer.json` file.


Configuration for Yii2 basic app
-----

After creating the module (e.g. admin) you should add some initialization code in the Module.php:

```php

use Yii;
use yii\base\Theme;
use yii\base\Application;

    public function init():void
    {
        parent::init();
        $this->initTheme();
    }


    private function initTheme(): void
    {
        Yii::$app->view->theme = new Theme([
            'pathMap' => ['@app/views' => '@yii2cmf/templates/adminlte/views'],
            'baseUrl' => '@web/templates/adminlte'
        ]);
    }

```
Configuration for ability editing template 
-----

Copy vendor/yii2cmf/yii2-adminlte-asset/src/views/adminlte folder to app/modules/admin/views.
And edit Module.php file:

```php

    public function init():void
    {
        parent::init();
        $this->initTheme();
    }

    private function initTheme(): void
    {
        Yii::$app->view->theme = new Theme([
            'pathMap' => ['@app/views' => '@app/modules/admin/views/adminlte'],
            'baseUrl' => '@web/modules/admin'
        ]);
    }
    
```    
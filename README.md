AdminLTE - Free admin dashboard template based on Bootstrap 4
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

After creating the module (e.g. admin) you should add some initialization code in the Module.php

```php

    public function init()
    {
        parent::init();
        $this->initTheme();
    }


    private function initTheme(): void
    {
        Yii::$app->view->theme = new Theme([
            'pathMap' => ['@app/views' => '@yii2cmf/templates/adminlte'],
            'baseUrl' => '@web/modules/admin'
        ]);
    }

```


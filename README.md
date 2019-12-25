AdminLTE - Free admin dashboard template based on Bootstrap 4
=============================================================
AdminLTE is a fully responsive administration template. Based on Bootstrap 4 framework. Highly customizable and easy to use. Fits many screen resolutions from small mobile devices to large desktops.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require yii2cmf/yii2-adminlte-asset "*"
```

or add

```
"yii2cmf/yii2-adminlte-asset": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use yii2cmf\adminlte\AdminLTEAsset;

AdminLTEAsset::register($this);
```
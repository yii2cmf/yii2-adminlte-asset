<?php
use yii\helpers\Html;
$bundle = \yii2cmf\templates\adminlte\AdminLTEAsset::register($this);
$this->title = "AdminLTE 3 | Starter";
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php $this->registerCsrfMetaTags() ?>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= Html::encode($this->title) ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <?php $this->head()?>
</head>
<body class="hold-transition sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">

  <!-- Navbar -->
  <?= $this->render('_nav', ['bundle' => $bundle]) ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?= $this->render('_sidebar', ['bundle' => $bundle]) ?>

  <!-- Content Wrapper. Contains page content -->
  <?= $this->render('_content', ['bundle' => $bundle, 'content' => $content]) ?>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <?= $this->render('_control_sidebar', ['bundle' => $bundle]) ?>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <?= $this->render('_footer', ['bundle' => $bundle]) ?>
</div>
<!-- ./wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
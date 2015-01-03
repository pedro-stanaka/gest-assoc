<?php
/**
 * @var $this Cake\View\View
 *
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css([
        '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin',
        'http://necolas.github.io/normalize.css/3.0.2/normalize.css',
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css',
        '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
        'libs/animate',
        'base-theme',
        'themes.min',
        'base',
    ]) ?>

    <?= $this->Html->script([
        '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js',
        'http://rocha.la/misc/jsdemos/slimScroll/jquery.slimscroll.js',
        'base',
        'script'], ['block' => 'scriptBottom']); ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>
<body class="theme-default main-menu-animated">
<div id="main-wrapper">
    <?php echo $this->element("Main/main-nav"); ?>

    <?php echo $this->element('Main/main-menu'); ?>

    <div id="content-wrapper">
        <?php if (!empty($this->Session->check('Flash'))): ?>

            <div id="pa-page-alerts-box alert alert-info">
                <?= $this->Flash->render() ?>
            </div>
        <?php endif; ?>
        <ul class="breadcrumb breadcrumb-page">
            <div class="breadcrumb-label text-light-gray"><?= _("You're here:") ?></div>
            <?= $this->Html->getCrumbs(' >> ', _('Home')); ?>
        </ul>

        <?= $this->fetch('content'); ?>

        <div id="main-menu-bg"></div>


    </div>
</div>

<!-- Get jQuery from Google CDN -->
<!--[if !IE]> -->
<script
    type="text/javascript"> window.jQuery || document.write("<script src='/js/vendor/jquery.min.js'>" + "<" + "/script>"); </script>
<!-- <![endif]-->
<!--[if lte IE 9]>
<script
    type="text/javascript"> window.jQuery || document.write("<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js'>" + "<" + "/script>"); </script>
<![endif]-->

<?= $this->fetch('scriptBottom') ?>

<script type="text/javascript">

</script>

</body>
</html>

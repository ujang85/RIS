<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php  $this->beginPage() ?>


<!--  -->
<head>

     <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>

    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>
    <?php  $this->head() ?>
</head>

<body>
<?php  $this->beginBody() ?>

<div id="art-main">
<header class="art-header">

<h1 class="art-headline">
    <a href="#">Radiologi Informatic System</a>
</h1>
<h2 class="art-slogan">RS JOGJA</h2>

</header> 
<div class="art-sheet clearfix">
<!-- <div class="wrap">  -->
<?php
    NavBar::begin([
       // 'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
           // 'class' => 'navbar-inverse ',
             'class' => 'navbar-inverse',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],

        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],


            ['label' => 'Master Data', 'active'=>true, 'items' => [
                ['label' => 'Data User', 'url' => ['/user2/index']],
                ['label' => 'Data Jenis Pemeriksaan', 'url' => '#'],
                ['label' => 'Data Tarif Pemeriksaan', 'url' => '#'],
                ['label' => 'Data Dokter Radiologi', 'url' => '#'],
                ['label' => 'Data Poli/Bangsal', 'url' => '#'],
                ['label' => 'Data Jenis Penjamin', 'url' => '#'],
                ['label' => 'Data Kegiatan Rujukan', 'url' => '#'],
                ]],

                

            ['label' => 'Registrasi Pasien', 'active'=>true, 'items' => [
                ['label' => 'Pasien Baru', 'url' => ['/reg-pasien/index']],
                ['label' => 'Input Pemeriksaan', 'url' => ['/input-periksa/index']],
                ]],
            ['label' => 'Input Kesan', 'url' => '#'],
            ['label' => 'Laporan Hasil', 'url' => '#'],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        
        <?= $content ?>
    </div>
    </div>
    </div>

<?php $this->endBody() ?>
</body></html>
<?php $this->endPage() ?>

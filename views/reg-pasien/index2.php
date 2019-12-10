<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'registrasi Pasien ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create reg pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    

    <?=  GridView::widget([
        'dataProvider' => $sqlProvider,
      
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
            'label' => 'No Registration',
            'value' => function ($model) {
            return $model['NO_REGISTRATION'];
            },
            ],
        ],
    ]);  ?>
</div>

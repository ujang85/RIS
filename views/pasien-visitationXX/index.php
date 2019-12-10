<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasien Visitations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-visitation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pasien Visitation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ORG_UNIT_CODE',
            'NO_REGISTRATION',
            'VISIT_ID',
            'VISIT_DATE',
            'RUJUKAN_ID',
            'CLINIC_ID',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

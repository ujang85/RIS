<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IdProsesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Id Proses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-proses-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Id Proses', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ket_input',
            'kode',
            'id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InputPeriksaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Input Periksas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="input-periksa-index">

  
    <p>
        <?= Html::a('Tambah Data Pemeriksaan radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_periksa',
            'id_kunjungan',
            'id_jenis_tindakan',
            'biaya',
            'qty',
            //'subtotal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

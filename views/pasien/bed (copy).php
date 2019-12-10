<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\SqlDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="bed-index">

  

    <div style="overflow-x:auto"> 
    <?= GridView::widget([
        'dataProvider' => $provider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ORG_UNIT_CODE',
            'nama_bangsal',
            'bangsal_kelas',
            'kapasitas',
            'isi',
            'kosong',
           


          //  ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>

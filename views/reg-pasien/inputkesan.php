<?php

use yii\helpers\Html;
// use yii\grid\GridView;
use kartik\grid\GridView;
use yii\db\Query;
use yii\helpers\Url;
use yii\widgets\Pjax;
use kartik\grid\EditableColumn;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'INPUT KESAN RADIOLOGI';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-pasien-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>
    <br>
   
</br>
    
    <?php
        $gridColumns = [
            ['class' => 'kartik\grid\SerialColumn',
            'header' => 'No',
            ],
            [
                'class' => 'kartik\grid\EditableColumn',
                'attribute' => 'kesan',
                // 'pageSummary' => 'Page Total',
                'vAlign'=>'middle',
               // 'format' => 'INPUT_TEXTAREA',
                // 'headerOptions'=>['class'=>'kv-sticky-column'],
                // 'contentOptions'=>['class'=>'kv-sticky-column'],
                'editableOptions'=>['header'=>'kesan', 'size'=>'lg','inputType'=>\kartik\editable\Editable::INPUT_TEXTAREA]
            ],
           'pegawai2.nama_pegawai',
            'no_cm',
            'nama',
            'id_kunjungan',
            ['class' => 'kartik\grid\ActionColumn',
                'template' => '{update}',
            ]
        ];
    ?>

    <?php 
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
        'columns' => $gridColumns,
                    'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
            'pjax' => true,
            'bordered' => true,
            'striped' => false,
            'condensed' => false,
            'responsive' => true,
            'hover' => true,
            'floatHeader' => true,
           // 'floatHeaderOptions' => ['scrollingTop' => $scrollingTop],
           // 'showPageSummary' => true,
            'panel' =>
                [
                    'type' => GridView::TYPE_PRIMARY
                ],
    
    ]);  ?>





























    <?php /*
    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'label' => 'Edit',
                'format' => 'raw',
                'content' => function($model) {
                    return Html::a('Edit', ['reg-pasien/edit', 'id' =>$model->id],
                        ['class' => 'btn btn-primary']);
                }
            ],
            'id_kunjungan',
            'no_cm',
           // 'nama',
           [
                'class' => EditableColumn::class,
                'attribute' => 'nama',
                'url' => ['ubah-nama'],
             ],
            'tgl_lahir',
            'sex',
           /*
            [
            'attribute' => 'no_cm',
            'format' => 'raw',
            'label' => 'Kode Kunjungan',
            'value' => function($model){
                return $model->getNama()->createCommand('select dbrs.PASIEN.NAME_OF_PASIEN FROM dbrs.PASIEN LEFT JOIN reg_pasien ON dbrs.PASIEN.NO_REGISTRATION = reg_pasien.no_cm')->getRawSql(); 
                } 
            ], 
            ['class' => 'yii\grid\ActionColumn'], 
        ],
    ]); */ ?>
   
</div>

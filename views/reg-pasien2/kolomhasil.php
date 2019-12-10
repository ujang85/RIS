<?php
use yii\helpers\Url;
use yii\helpers\Html;

return [
   
    [
        'class' => 'kartik\grid\SerialColumn',
        'header' => 'No',
        'width' => '30px',
    ],
        // [
        // 'class'=>'\kartik\grid\DataColumn',
        // 'attribute'=>'id',
    // ],
    /*
     ['class' => 'kartik\grid\ActionColumn',
      'header' => 'Lihat Hasil Bacaan',
      'template'=>'{view}',
      'urlCreator' => function($action,$model, $key) { 
                return Url::to(['lihat','id' => $model['id']]);
            },
            'viewOptions'=>['role'=>'modal-remote','title'=>'Hasil Bacaan','data-toggle'=>'tooltip'],
    ], */
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kesan',
        'header' => 'Hasil Bacaan',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'no_cm',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'nama',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'dokter',
        'value'=>'pegawai2.nama_pegawai',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'sex',
        'value'=>'kelamin.gender',
    ],
   
    
    
    
    ['class' => 'kartik\grid\ActionColumn',
      'header' => 'Aksi',
      'template'=>'{cetak}',
      'buttons' => [
                'cetak' => function($url, $model, $key) {     // render your custom button
                   // return Url::to(['cetak','id' => $model['id']]);
                    return Html::a('<i class="fa fa-sign-out"></i> cetak', ['cetak', 'id'=>$model->id]);
                }
            ]
            
    ],
          /*

			[      'class'=>'\kartik\grid\DataColumn',
            'attribute' => 'id_kunjungan',
            'format' => 'raw',
            'label' => 'cetak',
            'value' => function ($model) {
                return Html::a($model['id_kunjungan'], Url::to(['/reg-pasien2/cetak', 'id' => $model['id']]));
            }
    ],

			[      'class'=>'\kartik\grid\DataColumn',
            'attribute' => 'id_kunjungan',
            'format' => 'raw',
            'label' => 'Kode Kunjungan',
            'value' => function ($model) {
                return Html::a($model['id_kunjungan'], Url::to(['/reg-pasien2/lihat', 'id' => $model['id']]));
            }
    ],



              'urlCreator' => function($action,$model, $key) { 
                return Url::to(['cetak','id' => $model['id']]);
            },
          */
  
   /* [
        'class' => 'kartik\grid\ActionColumn',
        'dropdown' => false,
        'vAlign'=>'middle',
      /*  'urlCreator' => function($action, $model, $key, $index) { 
                return Url::to([$action,'id'=>$key]); 
            'urlCreator' => function($action,$model, $key) { 
                return Url::to(['update','id' => $model['id']]);
        },
        'viewOptions'=>['role'=>'modal-remote','title'=>'View','data-toggle'=>'tooltip'],
        'updateOptions'=>['role'=>'modal-remote','title'=>'Update'],
        'deleteOptions'=>['role'=>'modal-remote','title'=>'Delete', 
                          'data-confirm'=>false, 'data-method'=>false,// for overide yii data api
                          'data-request-method'=>'post',
                          'data-toggle'=>'tooltip',
                          'data-confirm-title'=>'Are you sure?',
                          'data-confirm-message'=>'Are you sure want to delete this item'],
    ],*/

];   
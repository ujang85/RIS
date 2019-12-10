<?php
use yii\helpers\Url;

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
     ['class' => 'kartik\grid\ActionColumn',
      'header' => 'Input Expertise',
      'template'=>'{update}',
    //  'updateOptions'=>['role'=>'modal-remote','title'=>'Input Hasil Bacaan'],

    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'hasil_bacaan',
        'header' => 'Expertise',
    ],
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'kesan',
        'header' => 'Kesan',
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
    [
        'class'=>'\kartik\grid\DataColumn',
        'attribute'=>'id_kunjungan',
    ],

   
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
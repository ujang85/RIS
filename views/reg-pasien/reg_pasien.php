<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use app\models\RegPasien;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'registrasi Pasien ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>
  

    <?php 
    $model2 = new RegPasien();
    echo $this->render('_form',['model' => $model2,
    ]);  ?>

  <p><h3>Daftar Pasien Radiologi</h3>
  </p>

   <?=  GridView::widget([
        'dataProvider' => $sqlProvider,
       // 'dataProvider' => $dataProvider,
        'columns' => [
        ['class' => 'yii\grid\SerialColumn',
          'header' => 'No',
        ],
       
        [
        'label' => 'No Registration',
        'value' => function ($model) {
        return $model['NO_REGISTRATION'];
        },
        ],
       
       

        // ini tombol aksi
        
         [
        'attribute' => 'visit_id',
        'format' => 'raw',
        'label' => 'kode kunjungan',
        'value' => function ($model) {
         
           return Html::a($model['VISIT_ID'],false, ['onclick' => "$('#regpasien-id_kunjungan').val(' ".$model['VISIT_ID']." ');
            $('#regpasien-no_cm').val(' ".$model['NO_REGISTRATION']." ');
            $('#regpasien-rujukan_asal').val(' ".$model['CLINIC_ID_FROM']." ');
            $('#regpasien-tgl_kunjungan').val(' ".$model['VISIT_DATE']." ')
            "]);
        }, 
        ],  
                //CLINIC_ID_FROM  rujukan_asal
         ],
           

        ]);  ?>

       
</div>

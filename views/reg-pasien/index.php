<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\db\Query;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienVisitationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'registrasi Pasien Radiologi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registrasi-pasien-index">

   
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <br>
    <br>
    <p>
        <?= Html::a('Tambah Data Pasien Radiologi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</br>
    <?=  GridView::widget([
        'dataProvider' => $dataProvider,
        'summary' => '',
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
           /*
            [
            'attribute' => 'id_kunjungan',
            'format' => 'raw',
            'label' => 'Kode Kunjungan',
            'value' => function ($model) {
             /*
               return Html::a($model['VISIT_ID'],false, ['onclick' => "$('#pasienvisitation-no_registration').val(' ".$model['NO_REGISTRATION']." ');
                $('#pasienvisitation-visit_id').val(' ".$model['VISIT_ID']." ')
                "]); 
                return Html::a($model['id_kunjungan'], Url::to(['/reg-pasien/periksa', 'id' => $model['id']]));
            ], */

            'no_cm',
            'nama',
            'tgl_kunjungan',
            'kelamin.gender',
            'jaminan.nama_status',
            'pegawai2.nama_pegawai',
           /*
            [
            'attribute' => 'no_cm',
            'format' => 'raw',
            'label' => 'Kode Kunjungan',
            'value' => function($model){
                return $model->getNama()->createCommand('select dbrs.PASIEN.NAME_OF_PASIEN FROM dbrs.PASIEN LEFT JOIN reg_pasien ON dbrs.PASIEN.NO_REGISTRATION = reg_pasien.no_cm')->getRawSql(); 
                } 
            ], 
            ['class' => 'yii\grid\ActionColumn'], */
           
        ],
    ]);  ?>
</div>

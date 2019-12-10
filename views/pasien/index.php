<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PasienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div style="overflow-x:auto"> 
    <?= GridView::widget([
        'dataProvider' => $SqlProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ORG_UNIT_CODE',
            'NO_REGISTRATION',
            'NAME_OF_PASIEN',
            'NAMA_AGAMA',
            'NAME_OF_GENDER',
            'CONTACT_ADDRESS',
            'NAME_OF_CLINIC',
            'tgl_masuk',
    
            'NO_REGISTRATION',
            'NAME_OF_PASIEN',
            'NAMA_AGAMA',
            'NAME_OF_GENDER',
            'CONTACT_ADDRESS',
            'NAME_OF_CLINIC',
            'tgl_masuk',

            'NO_REGISTRATION',
            'NAME_OF_PASIEN',
            'NAMA_AGAMA',
            'NAME_OF_GENDER',
            'CONTACT_ADDRESS',
            'NAME_OF_CLINIC',
            'tgl_masuk',



          //  'EMPLOYEE_ID',
          //  'KK_NO',
          //  'NAME_OF_PASIEN',
          //  'PLACE_OF_BIRTH',
          //  'DATE_OF_BIRTH',
            //'GENDER',
            //'NATION_ID',
            //'EDUCATION_TYPE_CODE',
            //'MARITALSTATUSID',
            //'KODE_AGAMA',
            //'KAL_ID',
            //'RT',
            //'RW',
            //'JOB_ID',
            //'STATUS_PASIEN_ID',
            //'ANAK_KE',
            //'CONTACT_ADDRESS',
            //'PHONE_NUMBER',
            //'MOBILE',
            //'EMAIL:email',
            //'PHOTO_LOCATION',
            //'REGISTRATION_DATE',
            //'MODIFIED_DATE',
            //'MODIFIED_BY',
            //'MODIFIED_FROM',
            //'POSTAL_CODE',
            //'GELAR',
            //'BLOOD_TYPE_ID',
            //'FAMILY_STATUS_ID',
            //'ISMENINGGAL',
            //'DEATH_DATE',
            //'PAYOR_ID',
            //'CLASS_ID',
            //'ACCOUNT_ID',
            //'KARYAWAN',
            //'DESCRIPTION',
            //'NEWCARD',
            //'BACKCHARGE',
            //'ORG_ID',
            //'COVERAGE_ID',
            //'MOTHER',
            //'FATHER',
            //'SPOUSE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    </div>
</div>

<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = $model->NO_REGISTRATION;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ORG_UNIT_CODE',
            'NO_REGISTRATION',
            'PASIEN_ID',
            'EMPLOYEE_ID',
            'KK_NO',
            'NAME_OF_PASIEN',
            'PLACE_OF_BIRTH',
            'DATE_OF_BIRTH',
            'GENDER',
            'NATION_ID',
            'EDUCATION_TYPE_CODE',
            'MARITALSTATUSID',
            'KODE_AGAMA',
            'KAL_ID',
            'RT',
            'RW',
            'JOB_ID',
            'STATUS_PASIEN_ID',
            'ANAK_KE',
            'CONTACT_ADDRESS',
            'PHONE_NUMBER',
            'MOBILE',
            'EMAIL:email',
            'PHOTO_LOCATION',
            'REGISTRATION_DATE',
            'MODIFIED_DATE',
            'MODIFIED_BY',
            'MODIFIED_FROM',
            'POSTAL_CODE',
            'GELAR',
            'BLOOD_TYPE_ID',
            'FAMILY_STATUS_ID',
            'ISMENINGGAL',
            'DEATH_DATE',
            'PAYOR_ID',
            'CLASS_ID',
            'ACCOUNT_ID',
            'KARYAWAN',
            'DESCRIPTION',
            'NEWCARD',
            'BACKCHARGE',
            'ORG_ID',
            'COVERAGE_ID',
            'MOTHER',
            'FATHER',
            'SPOUSE',
        ],
    ]) ?>

</div>

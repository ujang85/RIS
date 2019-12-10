<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */

$this->title = $model->NO_REGISTRATION;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Visitations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-visitation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update','VISIT_ID' => $model->VISIT_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'VISIT_ID' => $model->VISIT_ID], [
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
            'VISIT_ID',
            'STATUS_PASIEN_ID',
            'RUJUKAN_ID',
            'ADDRESS_OF_RUJUKAN',
            'REASON_ID',
            'WAY_ID',
            'PATIENT_CATEGORY_ID',
            'BOOKED_DATE',
            'VISIT_DATE',
            'ISNEW',
            'FOLLOW_UP',
            'PLACE_TYPE',
            'CLINIC_ID',
            'CLINIC_ID_FROM',
            'CLASS_ROOM_ID',
            'BED_ID',
            'KELUAR_ID',
            'IN_DATE',
            'EXIT_DATE',
            'DIANTAR_OLEH',
            'GENDER',
            'DESCRIPTION',
            'VISITOR_ADDRESS',
            'MODIFIED_BY',
            'MODIFIED_DATE',
            'MODIFIED_FROM',
            'EMPLOYEE_ID',
            'EMPLOYEE_ID_FROM',
            'RESPONSIBLE_ID',
            'RESPONSIBLE',
            'FAMILY_STATUS_ID',
            'TICKET_NO',
            'ISATTENDED',
            'PAYOR_ID',
            'CLASS_ID',
            'ISPERTARIF',
            'KAL_ID',
            'EMPLOYEE_INAP',
            'PASIEN_ID',
            'KARYAWAN',
            'ACCOUNT_ID',
            'CLASS_ID_PLAFOND',
            'BACKCHARGE',
            'COVERAGE_ID',
            'AGEYEAR',
            'AGEMONTH',
            'AGEDAY',
            'RECOMENDATION',
            'CONCLUSION',
            'SPECIMENNO',
            'LOCKED',
            'RM_OUT_DATE',
            'RM_IN_DATE',
            'LAMA_PINJAM',
            'STANDAR_RJ',
            'LENGKAP_RJ',
            'LENGKAP_RI',
            'RESEND_RM_DATE',
            'LENGKAP_RM1',
            'LENGKAP_RESUME',
            'LENGKAP_ANAMNESIS',
            'LENGKAP_CONSENT',
            'LENGKAP_ANESTESI',
            'LENGKAP_OP',
            'BACK_RM_DATE',
            'VALID_RM_DATE',
            'NO_SKP',
            'DIAGNOSA_ID',
            'TICKET_ALL',
            'SERVICED_TIME',
            'NO_SKPINAP',
            'TANGGAL_RUJUKAN',
            'SEP_PRINTDATE',
        ],
    ]) ?>

</div>

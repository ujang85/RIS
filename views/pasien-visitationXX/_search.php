<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-visitation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ORG_UNIT_CODE') ?>

    <?= $form->field($model, 'NO_REGISTRATION') ?>

    <?= $form->field($model, 'VISIT_ID') ?>

    <?= $form->field($model, 'STATUS_PASIEN_ID') ?>

    <?= $form->field($model, 'RUJUKAN_ID') ?>

    <?php // echo $form->field($model, 'ADDRESS_OF_RUJUKAN') ?>

    <?php // echo $form->field($model, 'REASON_ID') ?>

    <?php // echo $form->field($model, 'WAY_ID') ?>

    <?php // echo $form->field($model, 'PATIENT_CATEGORY_ID') ?>

    <?php // echo $form->field($model, 'BOOKED_DATE') ?>

    <?php // echo $form->field($model, 'VISIT_DATE') ?>

    <?php // echo $form->field($model, 'ISNEW') ?>

    <?php // echo $form->field($model, 'FOLLOW_UP') ?>

    <?php // echo $form->field($model, 'PLACE_TYPE') ?>

    <?php // echo $form->field($model, 'CLINIC_ID') ?>

    <?php // echo $form->field($model, 'CLINIC_ID_FROM') ?>

    <?php // echo $form->field($model, 'CLASS_ROOM_ID') ?>

    <?php // echo $form->field($model, 'BED_ID') ?>

    <?php // echo $form->field($model, 'KELUAR_ID') ?>

    <?php // echo $form->field($model, 'IN_DATE') ?>

    <?php // echo $form->field($model, 'EXIT_DATE') ?>

    <?php // echo $form->field($model, 'DIANTAR_OLEH') ?>

    <?php // echo $form->field($model, 'GENDER') ?>

    <?php // echo $form->field($model, 'DESCRIPTION') ?>

    <?php // echo $form->field($model, 'VISITOR_ADDRESS') ?>

    <?php // echo $form->field($model, 'MODIFIED_BY') ?>

    <?php // echo $form->field($model, 'MODIFIED_DATE') ?>

    <?php // echo $form->field($model, 'MODIFIED_FROM') ?>

    <?php // echo $form->field($model, 'EMPLOYEE_ID') ?>

    <?php // echo $form->field($model, 'EMPLOYEE_ID_FROM') ?>

    <?php // echo $form->field($model, 'RESPONSIBLE_ID') ?>

    <?php // echo $form->field($model, 'RESPONSIBLE') ?>

    <?php // echo $form->field($model, 'FAMILY_STATUS_ID') ?>

    <?php // echo $form->field($model, 'TICKET_NO') ?>

    <?php // echo $form->field($model, 'ISATTENDED') ?>

    <?php // echo $form->field($model, 'PAYOR_ID') ?>

    <?php // echo $form->field($model, 'CLASS_ID') ?>

    <?php // echo $form->field($model, 'ISPERTARIF') ?>

    <?php // echo $form->field($model, 'KAL_ID') ?>

    <?php // echo $form->field($model, 'EMPLOYEE_INAP') ?>

    <?php // echo $form->field($model, 'PASIEN_ID') ?>

    <?php // echo $form->field($model, 'KARYAWAN') ?>

    <?php // echo $form->field($model, 'ACCOUNT_ID') ?>

    <?php // echo $form->field($model, 'CLASS_ID_PLAFOND') ?>

    <?php // echo $form->field($model, 'BACKCHARGE') ?>

    <?php // echo $form->field($model, 'COVERAGE_ID') ?>

    <?php // echo $form->field($model, 'AGEYEAR') ?>

    <?php // echo $form->field($model, 'AGEMONTH') ?>

    <?php // echo $form->field($model, 'AGEDAY') ?>

    <?php // echo $form->field($model, 'RECOMENDATION') ?>

    <?php // echo $form->field($model, 'CONCLUSION') ?>

    <?php // echo $form->field($model, 'SPECIMENNO') ?>

    <?php // echo $form->field($model, 'LOCKED') ?>

    <?php // echo $form->field($model, 'RM_OUT_DATE') ?>

    <?php // echo $form->field($model, 'RM_IN_DATE') ?>

    <?php // echo $form->field($model, 'LAMA_PINJAM') ?>

    <?php // echo $form->field($model, 'STANDAR_RJ') ?>

    <?php // echo $form->field($model, 'LENGKAP_RJ') ?>

    <?php // echo $form->field($model, 'LENGKAP_RI') ?>

    <?php // echo $form->field($model, 'RESEND_RM_DATE') ?>

    <?php // echo $form->field($model, 'LENGKAP_RM1') ?>

    <?php // echo $form->field($model, 'LENGKAP_RESUME') ?>

    <?php // echo $form->field($model, 'LENGKAP_ANAMNESIS') ?>

    <?php // echo $form->field($model, 'LENGKAP_CONSENT') ?>

    <?php // echo $form->field($model, 'LENGKAP_ANESTESI') ?>

    <?php // echo $form->field($model, 'LENGKAP_OP') ?>

    <?php // echo $form->field($model, 'BACK_RM_DATE') ?>

    <?php // echo $form->field($model, 'VALID_RM_DATE') ?>

    <?php // echo $form->field($model, 'NO_SKP') ?>

    <?php // echo $form->field($model, 'DIAGNOSA_ID') ?>

    <?php // echo $form->field($model, 'TICKET_ALL') ?>

    <?php // echo $form->field($model, 'SERVICED_TIME') ?>

    <?php // echo $form->field($model, 'NO_SKPINAP') ?>

    <?php // echo $form->field($model, 'TANGGAL_RUJUKAN') ?>

    <?php // echo $form->field($model, 'SEP_PRINTDATE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

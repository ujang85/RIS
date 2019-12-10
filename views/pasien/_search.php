<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ORG_UNIT_CODE') ?>

    <?= $form->field($model, 'NO_REGISTRATION') ?>

    <?= $form->field($model, 'PASIEN_ID') ?>

    <?= $form->field($model, 'EMPLOYEE_ID') ?>

    <?= $form->field($model, 'KK_NO') ?>

    <?php // echo $form->field($model, 'NAME_OF_PASIEN') ?>

    <?php // echo $form->field($model, 'PLACE_OF_BIRTH') ?>

    <?php // echo $form->field($model, 'DATE_OF_BIRTH') ?>

    <?php // echo $form->field($model, 'GENDER') ?>

    <?php // echo $form->field($model, 'NATION_ID') ?>

    <?php // echo $form->field($model, 'EDUCATION_TYPE_CODE') ?>

    <?php // echo $form->field($model, 'MARITALSTATUSID') ?>

    <?php // echo $form->field($model, 'KODE_AGAMA') ?>

    <?php // echo $form->field($model, 'KAL_ID') ?>

    <?php // echo $form->field($model, 'RT') ?>

    <?php // echo $form->field($model, 'RW') ?>

    <?php // echo $form->field($model, 'JOB_ID') ?>

    <?php // echo $form->field($model, 'STATUS_PASIEN_ID') ?>

    <?php // echo $form->field($model, 'ANAK_KE') ?>

    <?php // echo $form->field($model, 'CONTACT_ADDRESS') ?>

    <?php // echo $form->field($model, 'PHONE_NUMBER') ?>

    <?php // echo $form->field($model, 'MOBILE') ?>

    <?php // echo $form->field($model, 'EMAIL') ?>

    <?php // echo $form->field($model, 'PHOTO_LOCATION') ?>

    <?php // echo $form->field($model, 'REGISTRATION_DATE') ?>

    <?php // echo $form->field($model, 'MODIFIED_DATE') ?>

    <?php // echo $form->field($model, 'MODIFIED_BY') ?>

    <?php // echo $form->field($model, 'MODIFIED_FROM') ?>

    <?php // echo $form->field($model, 'POSTAL_CODE') ?>

    <?php // echo $form->field($model, 'GELAR') ?>

    <?php // echo $form->field($model, 'BLOOD_TYPE_ID') ?>

    <?php // echo $form->field($model, 'FAMILY_STATUS_ID') ?>

    <?php // echo $form->field($model, 'ISMENINGGAL') ?>

    <?php // echo $form->field($model, 'DEATH_DATE') ?>

    <?php // echo $form->field($model, 'PAYOR_ID') ?>

    <?php // echo $form->field($model, 'CLASS_ID') ?>

    <?php // echo $form->field($model, 'ACCOUNT_ID') ?>

    <?php // echo $form->field($model, 'KARYAWAN') ?>

    <?php // echo $form->field($model, 'DESCRIPTION') ?>

    <?php // echo $form->field($model, 'NEWCARD') ?>

    <?php // echo $form->field($model, 'BACKCHARGE') ?>

    <?php // echo $form->field($model, 'ORG_ID') ?>

    <?php // echo $form->field($model, 'COVERAGE_ID') ?>

    <?php // echo $form->field($model, 'MOTHER') ?>

    <?php // echo $form->field($model, 'FATHER') ?>

    <?php // echo $form->field($model, 'SPOUSE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

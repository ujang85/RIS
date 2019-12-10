<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ORG_UNIT_CODE')->textInput() ?>

    <?= $form->field($model, 'NO_REGISTRATION')->textInput() ?>

    <?= $form->field($model, 'PASIEN_ID')->textInput() ?>

    <?= $form->field($model, 'EMPLOYEE_ID')->textInput() ?>

    <?= $form->field($model, 'KK_NO')->textInput() ?>

    <?= $form->field($model, 'NAME_OF_PASIEN')->textInput() ?>

    <?= $form->field($model, 'PLACE_OF_BIRTH')->textInput() ?>

    <?= $form->field($model, 'DATE_OF_BIRTH')->textInput() ?>

    <?= $form->field($model, 'GENDER')->textInput() ?>

    <?= $form->field($model, 'NATION_ID')->textInput() ?>

    <?= $form->field($model, 'EDUCATION_TYPE_CODE')->textInput() ?>

    <?= $form->field($model, 'MARITALSTATUSID')->textInput() ?>

    <?= $form->field($model, 'KODE_AGAMA')->textInput() ?>

    <?= $form->field($model, 'KAL_ID')->textInput() ?>

    <?= $form->field($model, 'RT')->textInput() ?>

    <?= $form->field($model, 'RW')->textInput() ?>

    <?= $form->field($model, 'JOB_ID')->textInput() ?>

    <?= $form->field($model, 'STATUS_PASIEN_ID')->textInput() ?>

    <?= $form->field($model, 'ANAK_KE')->textInput() ?>

    <?= $form->field($model, 'CONTACT_ADDRESS')->textInput() ?>

    <?= $form->field($model, 'PHONE_NUMBER')->textInput() ?>

    <?= $form->field($model, 'MOBILE')->textInput() ?>

    <?= $form->field($model, 'EMAIL')->textInput() ?>

    <?= $form->field($model, 'PHOTO_LOCATION')->textInput() ?>

    <?= $form->field($model, 'REGISTRATION_DATE')->textInput() ?>

    <?= $form->field($model, 'MODIFIED_DATE')->textInput() ?>

    <?= $form->field($model, 'MODIFIED_BY')->textInput() ?>

    <?= $form->field($model, 'MODIFIED_FROM')->textInput() ?>

    <?= $form->field($model, 'POSTAL_CODE')->textInput() ?>

    <?= $form->field($model, 'GELAR')->textInput() ?>

    <?= $form->field($model, 'BLOOD_TYPE_ID')->textInput() ?>

    <?= $form->field($model, 'FAMILY_STATUS_ID')->textInput() ?>

    <?= $form->field($model, 'ISMENINGGAL')->textInput() ?>

    <?= $form->field($model, 'DEATH_DATE')->textInput() ?>

    <?= $form->field($model, 'PAYOR_ID')->textInput() ?>

    <?= $form->field($model, 'CLASS_ID')->textInput() ?>

    <?= $form->field($model, 'ACCOUNT_ID')->textInput() ?>

    <?= $form->field($model, 'KARYAWAN')->textInput() ?>

    <?= $form->field($model, 'DESCRIPTION')->textInput() ?>

    <?= $form->field($model, 'NEWCARD')->textInput() ?>

    <?= $form->field($model, 'BACKCHARGE')->textInput() ?>

    <?= $form->field($model, 'ORG_ID')->textInput() ?>

    <?= $form->field($model, 'COVERAGE_ID')->textInput() ?>

    <?= $form->field($model, 'MOTHER')->textInput() ?>

    <?= $form->field($model, 'FATHER')->textInput() ?>

    <?= $form->field($model, 'SPOUSE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

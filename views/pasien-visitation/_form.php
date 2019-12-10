<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-visitation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ORG_UNIT_CODE')->textInput() ?>

    <?= $form->field($model, 'NO_REGISTRATION')->textInput() ?>

    <?= $form->field($model, 'VISIT_ID')->textInput() ?>

    <?= $form->field($model, 'STATUS_PASIEN_ID')->textInput() ?>

    <?= $form->field($model, 'RUJUKAN_ID')->textInput() ?>

    <?= $form->field($model, 'ADDRESS_OF_RUJUKAN')->textInput() ?>

    <?= $form->field($model, 'REASON_ID')->textInput() ?>

    <?= $form->field($model, 'WAY_ID')->textInput() ?>

    <?= $form->field($model, 'PATIENT_CATEGORY_ID')->textInput() ?>

    <?= $form->field($model, 'BOOKED_DATE')->textInput() ?>

    <?= $form->field($model, 'VISIT_DATE')->textInput() ?>

    <?= $form->field($model, 'ISNEW')->textInput() ?>

    <?= $form->field($model, 'FOLLOW_UP')->textInput() ?>

    <?= $form->field($model, 'PLACE_TYPE')->textInput() ?>

    <?= $form->field($model, 'CLINIC_ID')->textInput() ?>

    <?= $form->field($model, 'CLINIC_ID_FROM')->textInput() ?>

    <?= $form->field($model, 'CLASS_ROOM_ID')->textInput() ?>

    <?= $form->field($model, 'BED_ID')->textInput() ?>

    <?= $form->field($model, 'KELUAR_ID')->textInput() ?>

    <?= $form->field($model, 'IN_DATE')->textInput() ?>

    <?= $form->field($model, 'EXIT_DATE')->textInput() ?>

    <?= $form->field($model, 'DIANTAR_OLEH')->textInput() ?>

    <?= $form->field($model, 'GENDER')->textInput() ?>

    <?= $form->field($model, 'DESCRIPTION')->textInput() ?>

    <?= $form->field($model, 'VISITOR_ADDRESS')->textInput() ?>

    <?= $form->field($model, 'MODIFIED_BY')->textInput() ?>

    <?= $form->field($model, 'MODIFIED_DATE')->textInput() ?>

    <?= $form->field($model, 'MODIFIED_FROM')->textInput() ?>

    <?= $form->field($model, 'EMPLOYEE_ID')->textInput() ?>

    <?= $form->field($model, 'EMPLOYEE_ID_FROM')->textInput() ?>

    <?= $form->field($model, 'RESPONSIBLE_ID')->textInput() ?>

    <?= $form->field($model, 'RESPONSIBLE')->textInput() ?>

    <?= $form->field($model, 'FAMILY_STATUS_ID')->textInput() ?>

    <?= $form->field($model, 'TICKET_NO')->textInput() ?>

    <?= $form->field($model, 'ISATTENDED')->textInput() ?>

    <?= $form->field($model, 'PAYOR_ID')->textInput() ?>

    <?= $form->field($model, 'CLASS_ID')->textInput() ?>

    <?= $form->field($model, 'ISPERTARIF')->textInput() ?>

    <?= $form->field($model, 'KAL_ID')->textInput() ?>

    <?= $form->field($model, 'EMPLOYEE_INAP')->textInput() ?>

    <?= $form->field($model, 'PASIEN_ID')->textInput() ?>

    <?= $form->field($model, 'KARYAWAN')->textInput() ?>

    <?= $form->field($model, 'ACCOUNT_ID')->textInput() ?>

    <?= $form->field($model, 'CLASS_ID_PLAFOND')->textInput() ?>

    <?= $form->field($model, 'BACKCHARGE')->textInput() ?>

    <?= $form->field($model, 'COVERAGE_ID')->textInput() ?>

    <?= $form->field($model, 'AGEYEAR')->textInput() ?>

    <?= $form->field($model, 'AGEMONTH')->textInput() ?>

    <?= $form->field($model, 'AGEDAY')->textInput() ?>

    <?= $form->field($model, 'RECOMENDATION')->textInput() ?>

    <?= $form->field($model, 'CONCLUSION')->textInput() ?>

    <?= $form->field($model, 'SPECIMENNO')->textInput() ?>

    <?= $form->field($model, 'LOCKED')->textInput() ?>

    <?= $form->field($model, 'RM_OUT_DATE')->textInput() ?>

    <?= $form->field($model, 'RM_IN_DATE')->textInput() ?>

    <?= $form->field($model, 'LAMA_PINJAM')->textInput() ?>

    <?= $form->field($model, 'STANDAR_RJ')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_RJ')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_RI')->textInput() ?>

    <?= $form->field($model, 'RESEND_RM_DATE')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_RM1')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_RESUME')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_ANAMNESIS')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_CONSENT')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_ANESTESI')->textInput() ?>

    <?= $form->field($model, 'LENGKAP_OP')->textInput() ?>

    <?= $form->field($model, 'BACK_RM_DATE')->textInput() ?>

    <?= $form->field($model, 'VALID_RM_DATE')->textInput() ?>

    <?= $form->field($model, 'NO_SKP')->textInput() ?>

    <?= $form->field($model, 'DIAGNOSA_ID')->textInput() ?>

    <?= $form->field($model, 'TICKET_ALL')->textInput() ?>

    <?= $form->field($model, 'SERVICED_TIME')->textInput() ?>

    <?= $form->field($model, 'NO_SKPINAP')->textInput() ?>

    <?= $form->field($model, 'TANGGAL_RUJUKAN')->textInput() ?>

    <?= $form->field($model, 'SEP_PRINTDATE')->textInput() ?>

    <?= $form->field($model, 'RAD_INPUT')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>

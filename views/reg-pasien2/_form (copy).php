<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_cm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_kunjungan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asuransi')->textInput() ?>

    <?= $form->field($model, 'tgl_kunjungan')->textInput() ?>

    <?= $form->field($model, 'dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lama_baru')->textInput() ?>

    <?= $form->field($model, 'umur_tahun')->textInput() ?>

    <?= $form->field($model, 'umur_bulan')->textInput() ?>

    <?= $form->field($model, 'umur_hari')->textInput() ?>

    <?= $form->field($model, 'rujukan_asal')->textInput() ?>

    <?= $form->field($model, 'klinik_asal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kesan')->textInput(['maxlength' => true]) ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>

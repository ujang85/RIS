<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\JenisTindakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenis-tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tarif_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'treat_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_tarif')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CLASS_ID')->textInput() ?>

    <?= $form->field($model, 'TARIF_TYPE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'IMPLEMENTED')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ISCITO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MODIFIED_DATE')->textInput() ?>

    <?= $form->field($model, 'casemix_id')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>

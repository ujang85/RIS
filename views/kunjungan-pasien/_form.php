<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-visitation-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?= $form->field($model, 'NO_REGISTRATION')->textInput() ?>
    

    <?= $form->field($model, 'VISIT_ID')->textInput() ?>
    
  	<?= $form->field($model->nama, 'NAME_OF_PASIEN')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>

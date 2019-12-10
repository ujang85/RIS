<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdProses */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="id-proses-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ket_input')->textInput() ?>

    <?= $form->field($model, 'kode')->textInput() ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

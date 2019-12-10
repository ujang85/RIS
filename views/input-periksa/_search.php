<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InputPeriksaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="input-periksa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_periksa') ?>

    <?= $form->field($model, 'id_kunjungan') ?>

    <?= $form->field($model, 'id_jenis_tindakan') ?>

    <?= $form->field($model, 'biaya') ?>

    <?= $form->field($model, 'qty') ?>

    <?php // echo $form->field($model, 'subtotal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

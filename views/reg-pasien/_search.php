<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'no_cm') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'id_kunjungan') ?>

    <?php // echo $form->field($model, 'asuransi') ?>

    <?php // echo $form->field($model, 'tgl_kunjungan') ?>

    <?php // echo $form->field($model, 'dokter') ?>

    <?php // echo $form->field($model, 'lama_baru') ?>

    <?php // echo $form->field($model, 'umur_tahun') ?>

    <?php // echo $form->field($model, 'umur_bulan') ?>

    <?php // echo $form->field($model, 'umur_hari') ?>

    <?php // echo $form->field($model, 'rujukan_asal') ?>

    <?php // echo $form->field($model, 'klinik_asal') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

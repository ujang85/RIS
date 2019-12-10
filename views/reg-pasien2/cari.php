<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pegawai;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pasien-visitation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['hasil'],
        'method' => 'get',
    ]); ?>

   
    <?= $form->field($model, 'no_cm')->textinput(['maxlength' => true]) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Tampilkan', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\grid\GridView;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kesan')->textarea(['maxlength' => true]) ?>

   

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    
    
    <?php ActiveForm::end(); ?>

    
    
</div>

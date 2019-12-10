<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\InputPeriksa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="input-periksa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_kunjungan')->textInput(['maxlength' => true]) ?>
  

    <?= $form->field($model, 'id_jenis_tindakan')->textInput() ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <?= $form->field($model, 'qty')->textInput() ?>

    <?= $form->field($model, 'subtotal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php  Pjax::begin(); ?>
     <?=  GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            [
            'attribute' => 'id_kunjungan',
            'format' => 'raw',
            'label' => 'Kode Kunjungan',
            'value' => function ($model) {
            
               return Html::a($model['id_kunjungan'],false, ['onclick' => "$('#inputperiksa-id_kunjungan').val(' ".$model['id_kunjungan']." ')
                "]);
            }, 
            ],   
            'no_cm',
            'nama',
            'tgl_lahir',
            'sex',
           
        ],
    ]);  ?>
    <?php Pjax::end(); ?>

    <?php ActiveForm::end(); ?>

</div>

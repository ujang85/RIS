<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $searchModel app\models\InputPeriksaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Input Periksas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="input-periksa-index">

  <?php // echo $this->render('_form', ['model' => $searchModel]); ?>

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

    <?php ActiveForm::end(); ?>

</div>

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
             
               return Html::a($model['id_kunjungan'],false, ['onclick' => "$('#input-periksa-id_kunjungan').val(' ".$model['id_kunjungan']." ')
                "]); 
            }, 
            ],
            'no_cm',
            'nama',
            'tgl_lahir',
            'sex',
        ],
    ]);  ?>

</div>

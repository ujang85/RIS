<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use app\models\Pasien;
use app\models\Pegawai;
use yii\helpers\ArrayHelper;
//use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="pasien-visitation-form" id="edit_modal">

    <?php // $form = ActiveForm::begin(); ?>

   
    <?php
    $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
          //  'id_alat'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'id alat..']],
            'VISIT_ID'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO inventaris RS..']],
            'NO_REGISTRATION'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO inventaris BMN..']]
            
        ]
    ]);

    echo Form::widget([
        'model'=>$model->nama,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
          //  'id_alat'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'id alat..']],
            'NAME_OF_PASIEN'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO inventaris RS..']],
            'DATE_OF_BIRTH'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO inventaris BMN..']]
            
        ]
    ]);


    echo Form::widget([
    'model'=>$model,
    'form'=>$form,
    'columns'=>3,
    'compactGrid'=>false,
    'attributes'=>[       // 2 column layout
         'EMPLOYEE_ID_FROM'=>[
            'type'=>Form::INPUT_WIDGET, 
            'widgetClass'=>'\kartik\select2\Select2', 
            'options'=>['data'=>ArrayHelper::map(Pegawai::findBySql('SELECT * FROM pegawai WHERE status=1')->all(),'kode_pegawai','nama_pegawai'),'class'=>'col-md-8'],
           // 'hint'=>'pilih dokter',
            'label'=>'Dokter Perujuk',
            'pluginOptions' => [
                'allowClear' => true
              //  'multiple' => true
            ],
        ],
        'EMPLOYEE_ID'=>[
            'type'=>Form::INPUT_WIDGET, 
            'widgetClass'=>'\kartik\select2\Select2', 
            'options'=>['data'=>ArrayHelper::map(Pegawai::findBySql('SELECT * FROM pegawai WHERE kode_pegawai =0015 OR kode_pegawai =0042')->all(),'kode_pegawai','nama_pegawai'),'class'=>'col-md-8'],
           // 'hint'=>'pilih dokter',
            'label'=>'Dokter Yang dirujuk',
            'pluginOptions' => [
                'allowClear' => true
              //  'multiple' => true
            ],
        ]
        ]
    ]);    
    ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
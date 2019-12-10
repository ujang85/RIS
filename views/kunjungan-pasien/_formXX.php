<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\grid\GridView;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use app\models\Pasien;
use app\models\Pegawai;
use app\models\InputPeriksa;
use yii\helpers\ArrayHelper;
use wbraganca\dynamicform\DynamicFormWidget;
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

    <div class="raw">
    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i>Pemeriksaan</h4></div>
        <div class="panel-body">
             <?php DynamicFormWidget::begin([
                'widgetContainer' => 'dynamicform_wrapper', // required: only alphanumeric characters plus "_" [A-Za-z0-9_]
                'widgetBody' => '.container-items', // required: css class selector
                'widgetItem' => '.item', // required: css class
                'limit' => 14, // the maximum times, an element can be cloned (default 999)
                'min' => 1, // 0 or 1 (default 1)
                'insertButton' => '.add-item', // css class
                'deleteButton' => '.remove-item', // css class
                'model' => $modelsDetail[0],
                'formId' => 'dynamic-form',
                'formFields' => [
                    'id_kunjungan',
                    'id_jenis_tindakan',
                    'biaya',
                    'qty',
                   
                ],
            ]); ?>

            <div class="container-items"><!-- widgetContainer -->
            <?php foreach ($modelsDetail as $i => $modelDetail): ?>
                <div class="item panel panel-default"><!-- widgetBody -->
                    <div class="panel-heading">
                        <h3 class="panel-title pull-left">Pemeriksaan</h3>
                        <div class="pull-right">
                            <button type="button" class="add-item btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i></button>
                            <button type="button" class="remove-item btn btn-danger btn-xs"><i class="glyphicon glyphicon-minus"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <?php
                            // necessary for update action.
                            if (! $modelDetail->isNewRecord) {
                                echo Html::activeHiddenInput($modelDetail, "[{$i}]id");
                            }
                        ?>
                       
                        <div class="row main-form">
                            <div class="col-sm-6">
                                <?=  $form->field($modelDetail, "[{$i}]id_jenis_tindakan")->widget(Select2::classname(), [
                                                'data' => ArrayHelper::map(JenisTindakan::find()->where(['LIKE','treat_id','0800'])->all(),'id','nama_tarif'),
                                                'options' => ['placeholder' => 'Pilih Pemeriksaan','class'=>'input-code','id'=>'kode'],
                                                'pluginOptions' => [
                                                    'allowClear' => true
                                                ],
                                            ]);
                                            ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field( $modelDetail, "[{$i}]biaya")->textInput(['maxlength' => true, 'class' => 'result-name']) ?>
                            </div>
                            <div class="col-sm-6">
                                <?= $form->field( $modelDetail, "[{$i}]qty")->textInput(['maxlength' => true]) ?>
                            </div>
                        </div><!-- .row -->
                         </div>
                </div>
            <?php endforeach; ?>
            </div>
            <?php DynamicFormWidget::end(); ?>
        </div>
        </div>
   </div>


   
    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>



</div>
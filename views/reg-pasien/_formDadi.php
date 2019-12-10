<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\grid\GridView;
use yii\data\SqlDataProvider;
use yii\data\ActiveDataProvider;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use app\models\RegPasien;
use app\models\InputPeriksa;
use app\models\JenisTindakan;
use wbraganca\dynamicform\DynamicFormWidget;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */
/* @var $form yii\widgets\ActiveForm */
?>



<div class="reg-pasien-form">


  
   <?php $form = ActiveForm::begin([
        'id' => 'dynamic-form', 
        'type' => ActiveForm::TYPE_VERTICAL,
      //  'formConfig' => ['labelSpan' => 3, 'deviceSize' => ActiveForm::SIZE_SMALL]
    ]); 

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'id_kunjungan'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO kunjungan']],

            'tgl_kunjungan'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO Rekam Medis..']],
            'no_cm'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO Rekam Medis..']]
            
        ]
    ]);

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'nama'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Nama..']],
            'sex'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'jenis kelamin..']],
            'tgl_lahir'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'tgl_lahir']]
            
            
        ]
    ]);

    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout  
            'dokter'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'dokter radiologi..']],
            'asuransi'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'asuransi..']],
            'rujukan_asal'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'rujukan asal..']]
            
        ]
    ]);
    // ini di hidden semua
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>5,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout  
            'lama_baru'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'dokter radiologi..']],
            'umur_tahun'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'asuransi..']],
            'umur_bulan'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'asuransi..']],
            'klinik_asal'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'rujukan asal..']]
            
        ]
    ]);
?>


	<div class="raw">
    <div class="panel panel-default">
        <div class="panel-heading"><h4><i class="glyphicon glyphicon-envelope"></i>Pemerriksaan</h4></div>
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
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
 
 
    <div style="overflow-x:auto"> 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
        'attribute' => 'visit_id',
        'format' => 'raw',
        'label' => 'Kode Kunjungan',
        'value' => function ($model) {
        
           return Html::a($model['VISIT_ID'],false, ['onclick' => "$('#regpasien-no_cm').val('".$model['NO_REGISTRATION']."');
            $('#regpasien-id_kunjungan').val('".$model['VISIT_ID']."');
            $('#regpasien-nama').val('".$model->nama['NAME_OF_PASIEN']."');
            $('#regpasien-tgl_lahir').val('".Yii::$app->formatter->asDatetime($model->nama['DATE_OF_BIRTH'], 'php:Y-m-d')."');
            $('#regpasien-sex').val('".$model['GENDER']."');
            $('#regpasien-asuransi').val('".$model['STATUS_PASIEN_ID']."');
            $('#regpasien-tgl_kunjungan').val('".$model['VISIT_DATE']."');
            $('#regpasien-dokter').val('".$model['EMPLOYEE_ID']."');
            $('#regpasien-umur_tahun').val('".$model['AGEYEAR']."');
            $('#regpasien-umur_bulan').val('".$model['AGEMONTH']."');
            $('#regpasien-rujukan_asal').val('".$model['RUJUKAN_ID']."');
            $('#regpasien-klinik_asal').val('".$model['CLINIC_ID_FROM']."');

            $('#regpasien-lama_baru').val('".$model['ISNEW']."')
            "]); 
          //  return Html::a($model['VISIT_ID'], Url::to(['/kunjungan-pasien/update', 'VISIT_ID' => $model['VISIT_ID']]));
        }, 
        ], 
            'NO_REGISTRATION',
            'nama.NAME_OF_PASIEN',
            'nama.DATE_OF_BIRTH',
            'GENDER',
            'STATUS_PASIEN_ID',
            'VISIT_DATE',
            'EMPLOYEE_ID',
            'AGEYEAR',
            'AGEMONTH',
            'RUJUKAN_ID',
            'CLINIC_ID_FROM',
            'proses.ket_input',

        ],
    ]); ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>


<?php 

$script = <<< JS

 $(document).on('change','.input-code', function(){
var current = $(this);
var parent = current.parents('.main-form');
    var kode=current.val();
   // alert(kode);
     $.get('index.php?r=jenis-tindakan/get-tarif',{ kode : kode },function(data){
       var data = $.parseJSON(data);
     //  alert(data);
       parent.find('.result-name').val(data.biaya);
 
        });
    });

JS;
$this->registerJs($script);
//$this->registerJs($script, $this::POS_END);
?>
<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use app\models\RegPasien;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Pasien;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $model app\models\RegPasienSearch */
/* @var $form yii\widgets\ActiveForm */
//$model = new RegPasien();
?>

<div class="reg-pasien-form">

<?php

    $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);

   
    echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>4,
        'compactGrid'=>true,
        'attributes'=>[       // 2 column layout
            'id_kunjungan'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO kunjungan']],
            'tgl_kunjungan'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO Rekam Medis..']],
            'no_cm'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'NO Rekam Medis..']]
          //  'actions'=>['type'=>Form::INPUT_RAW, 'value'=>Html::submitButton('Cari', ['class'=>'btn btn-primary ml-2'])]
            //<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_large">Browse</button>

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
            'dokter'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'dokter radiologi..']],
            'asuransi'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'asuransi..']],
            'rujukan_asal'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'rujukan asal..']]
            
        ]
    ]);
?>

  
</div>

<div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

<?php ActiveForm::end(); ?>
</div>

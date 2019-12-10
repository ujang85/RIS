<?php

use yii\helpers\Html;
//use yii\widgets\DetailView;
use kartik\detail\DetailView;
use yii\data\ActiveDataProvider;
use kartik\builder\Form;
use kartik\form\ActiveForm;
use app\models\RegPasien;
use unclead\multipleinput\MultipleInput;
/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */

$this->title = $model->id_kunjungan;
$this->params['breadcrumbs'][] = ['label' => 'Reg Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reg-pasien-view">

  
    <?=
     DetailView::widget([
    'model'=>$model,
    'condensed'=>true,
    'hover'=>true,
    'mode'=>DetailView::MODE_VIEW,
    'panel'=>[
        'heading'=>'Nama :' . $model->nama,
        'type'=>DetailView::TYPE_INFO,
    ],

    /*
    'attributes'=>[
            'no_cm',
            'nama',
            'tgl_lahir',
            'sex',
            'id_kunjungan',
            'asuransi',
            'tgl_kunjungan',
            'dokter',

    
    ] */

    'attributes'=>[
        
        [
    'columns' =>[
          [
            'attribute'=>'id_kunjungan',
                        
                'valueColOptions'=>['style'=>'width:30%']

         ],
         [
            'attribute'=>'tgl_kunjungan',
        'valueColOptions'=>['style'=>'width:30%']                               
         ],

     ],
       ],


    [
    'columns' =>[
          [
            'attribute'=>'no_cm',
                        
                'valueColOptions'=>['style'=>'width:30%']

         ],
         [
            'attribute'=>'nama',
        'valueColOptions'=>['style'=>'width:30%']                               
         ],

     ],
       ],

    [
    'columns' =>[
          [
            'attribute'=>'tgl_lahir',
                        
                'valueColOptions'=>['style'=>'width:30%']

         ],
         [
            'attribute'=>'sex',
        'valueColOptions'=>['style'=>'width:30%']                               
         ],

     ],
       ],   
    [
    'columns' =>[
          [
            'attribute'=>'asuransi',
                        
                'valueColOptions'=>['style'=>'width:30%']

         ],
         [
            'attribute'=>'dokter',
        'valueColOptions'=>['style'=>'width:30%']                               
         ],

     ],
       ]   


     ]
    ]); ?>

        <?php
            $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);
           echo Form::widget([
                'model'=>$model,
                'form'=>$form,
                'columns'=>1,
                'compactGrid'=>true,
                'attributes'=>[       // 2 column layout  
                    'id_jenis_tindakan'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'id_kunjungan']],
                    'id_kunjungan'=>['type'=>Form::INPUT_HIDDEN, 'options'=>['placeholder'=>'id_kunjungan']]
                    
                ]
            ]);
        ?>
        <?php /*
            echo $form->field($model, 'id_jenis_tindakan')->widget(MultipleInput::className(), [
                'max'               => 16,
                'min'               => 1, // should be at least 2 rows
                'allowEmptyList'    => false,
                'enableGuessTitle'  => true,
                'addButtonPosition' => MultipleInput::POS_HEADER, // show add button in the header
            ])
            ->label(false);  */
        ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

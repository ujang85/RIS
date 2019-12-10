<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
//use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reg-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

   
   
    
    <?= $form->field($model, 'hasil_bacaan')->widget(TinyMce::className(), [
    'options' => ['rows' => 16],
    'language' => 'en',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>
    <?= $form->field($model, 'kesan')->textarea(['maxlength' => true]) ?>
    

  
	<?php  if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php  } ?>

    <?php ActiveForm::end(); ?>
    
</div>

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
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

   
    <?=
    $form->field($model, 'dokter')->dropDownList(
        /*    ArrayHelper::map(Pegawai::find()->all(),'kode_pegawai','nama_pegawai'))  */
        ArrayHelper::map(Pegawai::findBySql('SELECT * FROM pegawai WHERE kode_pegawai =0015 OR kode_pegawai =0042')->all(),'kode_pegawai','nama_pegawai'))
    ?>

    

    <div class="form-group">
        <?= Html::submitButton('Tampilkan', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

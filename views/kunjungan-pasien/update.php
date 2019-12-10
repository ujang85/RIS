<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */

// $this->title = 'Input Pasien Radiologi: ' . $model->NO_REGISTRATION . "==>" .$model->nama->NAME_OF_PASIEN;
$this->params['breadcrumbs'][] = ['label' => 'Kunjungan Pasien', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->VISIT_ID, 'url' => ['view','VISIT_ID' => $model->VISIT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-visitation-update">

    
<p>Input Pasien Radiologi </p>


    <?= $this->render('_formXX', [
        'model' => $model,
    ]) ?>
   

</div>

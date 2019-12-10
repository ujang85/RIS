<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InputPeriksa */

$this->title = 'Tambah Data Pemeriksaan Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Input Data Pemeriksaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="input-periksa-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]) ?>
   
   

</div>

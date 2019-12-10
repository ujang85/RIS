<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */

$this->title = 'Update Reg Pasien: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reg-pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formedit', [
        'model' => $model,
    ]) ?>

</div>

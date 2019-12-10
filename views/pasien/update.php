<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pasien */

$this->title = 'Update Pasien: ' . $model->NO_REGISTRATION;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NO_REGISTRATION, 'url' => ['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

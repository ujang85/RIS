<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */

$this->title = 'Update Pasien Visitation: ' . $model->NO_REGISTRATION;
$this->params['breadcrumbs'][] = ['label' => 'Pasien Visitations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NO_REGISTRATION, 'url' => ['view', 'NO_REGISTRATION' => $model->NO_REGISTRATION, 'ORG_UNIT_CODE' => $model->ORG_UNIT_CODE, 'VISIT_ID' => $model->VISIT_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pasien-visitation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

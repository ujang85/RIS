<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\InputPeriksa */

$this->title = 'Update Input Periksa: ' . $model->id_periksa;
$this->params['breadcrumbs'][] = ['label' => 'Input Periksas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_periksa, 'url' => ['view', 'id' => $model->id_periksa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="input-periksa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

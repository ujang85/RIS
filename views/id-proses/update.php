<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IdProses */

$this->title = 'Update Id Proses: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Id Proses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="id-proses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

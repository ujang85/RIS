<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */

$this->title = 'Input Pasien Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Radiologi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-visitation-create">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

   

</div>

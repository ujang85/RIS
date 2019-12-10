<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PasienVisitation */

$this->title = 'Create Pasien Visitation';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Visitations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-visitation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

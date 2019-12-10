<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IdProses */

$this->title = 'Create Id Proses';
$this->params['breadcrumbs'][] = ['label' => 'Id Proses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="id-proses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

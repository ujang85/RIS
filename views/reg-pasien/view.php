<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Reg Pasien', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="reg-pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'no_cm',
            'nama',
            'tgl_lahir',
            'sex',
            'id_kunjungan',
            'asuransi',
            'tgl_kunjungan',
            'dokter',
            'lama_baru',
            'umur_tahun',
            'umur_bulan',
            'umur_hari',
            'rujukan_asal',
            'klinik_asal',
        ],
    ]) ?>

</div>

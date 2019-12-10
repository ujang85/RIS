<?php

use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */
$this->title = 'Hasil Pasien Radiologi';
$this->params['breadcrumbs'][] = ['label' => 'Pasien Radiologi', 'url' => ['hasil']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="reg-pasien-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_cm',
            'nama',
            'tgl_lahir',
            'kelamin.gender',
            'id_kunjungan',
            'pegawai2.nama_pegawai',
            'kesan',
        ],
    ]) ?>

<div class="item panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title pull-left"><i class="glyphicon glyphicon-barcode"></i> Daftar pemeriksaan</h3>
        <div class="clearfix"></div>
    </div>
    <div class="panel-body">
        <?= GridView::widget([
            'dataProvider' => $detail,
            'columns' => [
               // ['class' => 'yii\grid\SerialColumn'],
 
                /*
                [
                    'attribute' => 'item_id',
                    'value' => 'item.name',
                    'header' => 'Item Name',
                ], */
                'id_kunjungan',
                'id_jenis_tindakan',
            ],
        ]); ?>
    </div>
</div>

<?php  echo $hasil; ?></td>

</div>

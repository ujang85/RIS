<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RegPasien */
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

</div>
